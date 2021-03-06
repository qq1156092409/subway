<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use Yii;

/**
 * This is the model class for table "campaign".
 *
 * @property integer $campaign_id
 * @property string $nick
 * @property string $title
 * @property string $settle_status
 * @property string $settle_reason
 * @property string $create_time
 * @property string $modified_time
 * @property string $online_status
 * @property string $api_time
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id'], 'required'],
            [['campaign_id'], 'integer'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['nick', 'title'], 'string', 'max' => 64],
            [['settle_status', 'online_status'], 'string', 'max' => 16],
            [['settle_reason'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campaign_id' => 'Campaign ID',
            'nick' => 'Nick',
            'title' => 'Title',
            'settle_status' => 'Settle Status',
            'settle_reason' => 'Settle Reason',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'online_status' => 'Online Status',
            'api_time' => 'Api Time',
        ];
    }

    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }
    public function getCampaignSetting(){
        return $this->hasOne(CampaignSetting::className(),["campaign_id"=>"campaign_id"]);
    }
    public function getAdgroups(){
        return $this->hasMany(Adgroup::className(),["campaign_id"=>"campaign_id"]);
    }

    //--refresh data
    public function refreshAdgroups(){
        $count=0;
        $pageSize="200";
        $req=new \SimbaAdgroupsbycampaignidGetRequest;
        $req->setNick($this->nick);
        $req->setPageSize($pageSize);
        $req->setCampaignId("".$this->campaign_id);
        $req->setPageNo("1");
        $response=TopClient::getInstance()->execute($req, $this->store->session);
//        echo "<pre>";print_r($response);exit;
        Adgroup::deleteAll(["campaign_id"=>$this->campaign_id]);

        $count+=$this->insertAdgroups($response->adgroups->adgroup_list->a_d_group);
        $totalPage=ceil($response->adgroups->total_item/$pageSize);
        if($totalPage>1){
            for($i=2;$i<=$totalPage;$i++){
                $req->setPageNo("".$i);
                $response=TopClient::getInstance()->execute($req, $this->store->session);
                $count+=$this->insertAdgroups($response->adgroups->adgroup_list->a_d_group);
            }
        }
        return $count;
    }
    protected function insertAdgroups($itemList){
        $now=date("Y-m-d H:i:s");
        $columns=(new Adgroup())->attributes();
        $rows=[];
        if($itemList){
            foreach($itemList as $itemOne){
                $itemOne=(array)$itemOne;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }elseif($column=="campaign_id"){
                        $temp[]=$this->campaign_id;
                    }else{
                        $temp[]=isset($itemOne[$column])?$itemOne[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
        return Yii::$app->db->createCommand()->batchInsert(Adgroup::tableName(),$columns,$rows)->execute();
    }

    /**
     * 最多刷新30天前的数据
     * @return int
     */
    public function refreshBaseReports(){
        $count=0;
        $req = new \SimbaRptCampaignBaseGetRequest;
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var CampaignBase $exist */
        $exist=CampaignBase::find()->where(["nick"=>$this->nick])->andWhere("date > '".$start."'")->orderBy("date desc")->limit(1)->one();
        if($exist){
            if($exist->date==$yestoday){
                return $count;
            }
            $start=date("Y-m-d",strtotime("1 day",strtotime($exist->date)));
        }
        $pageNo=1;
        $pageSize=100;
        $req->setStartTime($start);
        $req->setEndTime($yestoday);
        $req->setPageSize("".$pageSize);
        $req->setSource("1,2");
        $req->setSearchType("SEARCH");
        $req->setCampaignId("" . $this->campaign_id);
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->store->session);
//            echo "<pre>";print_r($response);exit;
            $count+= $this->insertBaseReports($response->rpt_campaign_base_list);
            if($count<$pageSize){
                break;
            }
        }
        return $count;
    }
    protected function insertBaseReports($bases){
        $now=date("Y-m-d H:i:s");
        $columns=(new CampaignBase())->attributes();
        $count=0;
        if($bases){
            $rows=[];
            foreach($bases as $base){
                $temp=[];
                $base=(array)$base;
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }else{
                        $temp[]=isset($base[$column])?$base[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
//            echo "<pre>";print_r($rows);exit;
            $count+=Yii::$app->db->createCommand()->batchInsert(CampaignBase::tableName(),$columns,$rows)->execute();
        }
        return $count;
    }
    public function refreshEffectReports(){
        $count=0;
        $req = new \SimbaRptCampaignEffectGetRequest;
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var CampaignEffect $exist */
        $exist=CampaignEffect::find()->where(["nick"=>$this->nick])->andWhere("date > '".$start."'")->orderBy("date desc")->limit(1)->one();
        if($exist){
            if($exist->date==$yestoday){
                return $count;
            }
            $start=date("Y-m-d",strtotime("1 day",strtotime($exist->date)));
        }
        $pageNo=1;
        $pageSize=100;
        $req->setStartTime($start);
        $req->setEndTime($yestoday);
        $req->setPageSize("".$pageSize);
        $req->setSource("1,2");
        $req->setSearchType("SEARCH");
        $req->setCampaignId("" . $this->campaign_id);
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->store->session);
//            echo "<pre>";print_r($response);exit;
            $count+= $this->insertEffectReports($response->rpt_campaign_effect_list);
            if($count<$pageSize){
                break;
            }
        }
        return $count;
    }
    protected function insertEffectReports($effects){
        $now=date("Y-m-d H:i:s");
        $columns=(new CampaignEffect())->attributes();
        $count=0;
        if($effects){
            $rows=[];
            foreach($effects as $effect){
                $temp=[];
                $effect=(array)$effect;
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }else{
                        $temp[]=isset($effect[$column])?$effect[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
//            echo "<pre>";print_r($rows);exit;
            $count+=Yii::$app->db->createCommand()->batchInsert(CampaignEffect::tableName(),$columns,$rows)->execute();
        }
        return $count;
    }

    /**
     * 实时报表
     */
    public function refreshRealTimeReport(){
        $req = new \SimbaRtrptAdgroupGetRequest;
        $req->setNick($this->nick);
        $req->setCampaignId("".$this->campaign_id);
        $date=date("Y-m-d");
        $req->setTheDate($date);
        $response=TopClient::getInstance()->execute($req,$this->store->session);
//        echo "<pre>";print_r($response);exit;
        CampaignRealTimeReport::deleteAll(["nick"=>$this->nick,"thedate"=>$date]);
        $report=new CampaignRealTimeReport();
        $datas=$response->results->rt_rpt_result_entity_d_t_o;
        if($datas){
            foreach($datas as $data){
                $data=(array)$data;
                foreach($data as $k=>$v){
                    if(in_array($k,["nick","thedate","campaignid","adgroupid"]))continue;
                    $report->$k+=$v;
                }
            }
        }
        $report->thedate=$date;
        $report->nick=$this->nick;
        $report->campaignid=$this->campaign_id;
        $report->api_time=date("Y-m-d H:i:s");
//        $report->calculate();
        return $report->save();
    }
}
