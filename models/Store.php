<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use app\models\multiple\DataReport;
use app\models\multiple\GlobalModel;
use Yii;

/**
 * This is the model class for table "store".
 *
 * @property integer $id
 * @property string $nick
 * @property string $session
 * @property string $create_time
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['session'], 'string', 'max' => 128],
            [['nick'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nick' => 'Nick',
            'session' => 'Session',
            'create_time' => 'Create Time',
        ];
    }

    //--relations
    public function getBalance(){
        return $this->hasOne(Balance::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getSubscribe(){
        return $this->hasOne(Subscribe::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getAuthSign(){
        return $this->hasOne(AuthSign::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getItems(){
        return $this->hasMany(Item::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getCampaigns(){
        return $this->hasMany(Campaign::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getAdgroups(){
        return $this->hasMany(Adgroup::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getRealTimeReport(){
        return $this->hasOne(CustRealTimeReport::className(),["nick"=>"nick"])->onCondition(["thedate"=>date("Y-m-d")])->inverseOf("store");
    }

    //--get
    public function getDataReports($day){
        $start=date("Y-m-d",strtotime("- $day days"));
        /** @var CustBase[] $bases */
        $bases=CustBase::find()->where(["nick"=>$this->nick])->andWhere("date >='$start'")->all();
        /** @var CustEffect $effects */
        $effects=CustEffect::find()->where(["nick"=>$this->nick])->andWhere("date >='$start'")->all();
        $reports=[];
        if($bases){
            foreach($bases as $base){
                $reports[$base->date][$base->source]["base"]=$base;
            }
        }
        if($effects){
            foreach($effects as $effect){
                $reports[$effect->date][$effect->source]["effect"]=$effect;
            }
        }
        foreach($reports as $date=>$reports2){
            foreach($reports2 as $source=>$reports3){
                $a=isset($reports3["base"])?$reports3["base"]:null;
                $b=isset($reports3["effect"])?$reports3["effect"]:null;
                $reports[$date][$source]["report"]=(new DataReport())->loadData([$a,$b]);
            }
        }
        $ret=[];
        foreach($reports as $date=>$reports2){
            $temps=[];
            foreach($reports2 as $reports3){
                $temps[]=$reports3["report"];
            }
            $ret[$date] = DataReport::merge($temps);
        }
        return $ret;
    }
    public function getRtDataReport(){
        $report=new DataReport();
        return $report->loadData($this->realTimeReport);
    }

    //--refresh data
    public function refreshBalance(){
        $req=new \SimbaAccountBalanceGetRequest();
        $req->setNick($this->nick);
        $response=TopClient::getInstance()->execute($req, $this->session);
        Balance::deleteAll(["nick"=>$this->nick]);
        $balance=new Balance();
        $balance->balance=100*$response->balance;
        $balance->nick=$this->nick;
        return $balance->save();
    }
    public function refreshItems(){
        $count=0;
        $pageNo=1;
        $pageSize=200;
        $req=new \SimbaAdgroupOnlineitemsvonGetRequest;
        $req->setNick($this->nick);
        $req->setPageSize("".$pageSize);
        Item::deleteAll(["nick"=>$this->nick]);
        while(1){
            $req->setPageNo("".$pageNo);
            $response=TopClient::getInstance()->execute($req, $this->session);
            $count+=$this->insertItems($response->page_item->item_list->subway_item);
            if(count($response->page_item->item_list->subway_item)<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
    protected function insertItems($itemList){
        $now=date("Y-m-d H:i:s");
        $columns=[
            'num_id',
            'nick',
            'price',
            'title',
            'publish_time',
            'quantity',
            'sales_count',
            'api_time',
        ];
        $rows=[];
        if($itemList){
            foreach($itemList as $itemOne){
                $itemOne=(array)$itemOne;
                $axtra=(array)$itemOne["extra_attributes"];
                $rows[]=[
                    $itemOne["num_id"],
                    $this->nick,
                    $itemOne["price"],
                    $itemOne["title"],
                    $axtra["publish_time"],
                    $axtra["quantity"],
                    $axtra["sales_count"],
                    $now,
                ];
            }
        }
        return Yii::$app->db->createCommand()->batchInsert(Item::tableName(),$columns,$rows)->execute();
    }
    public function refreshCampaigns(){
        $req=new \SimbaCampaignsGetRequest;
        $req->setNick($this->nick);
        $response=TopClient::getInstance()->execute($req, $this->session);
//        echo "<pre>";print_r($response);exit;
        Campaign::deleteAll(["nick"=>$this->nick]);
        $now=date("Y-m-d H:i:s");
        $model=new Campaign();
        $columns=$model->attributes();
        $rows=[];
        if($response->campaigns->campaign){
            foreach($response->campaigns->campaign as $campaignObj){
                $campaignObj=(array)$campaignObj;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time") {
                        $temp[] = $now;
                    }elseif($column=="nick"){
                        $temp[] = $this->nick;
                    }else{
                        $temp[]=(isset($campaignObj[$column])?$campaignObj[$column]:null);
                    }
                }
                $rows[]=$temp;
            }
        }
//        echo "<pre>";print_r($rows);exit;
        return Yii::$app->db->createCommand()->batchInsert(Campaign::tableName(),$columns,$rows)->execute();
    }
    public function refreshSubscribe(){
        $req=new \VasSubscribeGetRequest;
        $req->setNick($this->nick);
        $req->setArticleCode(TopClient::ARTICLE_CODE);
        $response=TopClient::getInstance()->execute($req, $this->session);
//        echo "<pre>";print_r($response);exit;
        Subscribe::deleteAll(["nick"=>$this->nick]);
        $subscribe=new Subscribe();
        $subscribe->load((array)$response->article_user_subscribes->article_user_subscribe,"");
        $subscribe->api_time=date("Y-m-d H:i:s");
        $subscribe->nick=$this->nick;
        return $subscribe->save();
    }
    public function refreshAuthSign(){
        $req=new \SimbaLoginAuthsignGetRequest;
        $req->setNick($this->nick);
        $response=TopClient::getInstance()->execute($req, $this->session);
//        echo "<pre>";print_r($response);exit;
        $responseArr=((array)$response);
        AuthSign::deleteAll(["nick"=>$this->nick]);
        $authSign=new AuthSign();
        $authSign->subway_token=$responseArr["subway_token"];
        $authSign->api_time=date("Y-m-d H:i:s");
        $authSign->nick=$this->nick;
        return $authSign->save();
    }

    /**
     * 最多刷新30天前的数据
     * @return int
     */
    public function refreshCustBases(){
        $count=0;
        $req = new \SimbaRptCustbaseGetRequest;
        $req->setSubwayToken($this->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var CustBase $exist */
        $exist=CustBase::find()->where(["nick"=>$this->nick])->andWhere("date > '".$start."'")->orderBy("date desc")->limit(1)->one();
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
        $req->setSource("1,2,4,5");
//        $req->setSource("SUMMARY");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->session);
//            echo "<pre>";print_r($response);exit;
            $count+=GlobalModel::batchInsert(CustBase::className(),$response->rpt_cust_base_list);
            if($count<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
    public function refreshCustEffects(){
        $count=0;
        $req = new \SimbaRptCusteffectGetRequest;
        $req->setSubwayToken($this->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var CustEffect $exist */
        $exist=CustEffect::find()->where(["nick"=>$this->nick])->andWhere("date > '".$start."'")->orderBy("date desc")->limit(1)->one();
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
        $req->setSource("1,2,4,5");
//        $req->setSource("SUMMARY");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->session);
//            echo "<pre>";print_r($response);exit;
            $count+=GlobalModel::batchInsert(CustEffect::className(),$response->rpt_cust_effect_list);
            if($count<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }

    /**
     * 实时报表
     */
    public function refreshRealTimeReport(){
        $req = new \SimbaRtrptCustGetRequest;
        $req->setNick($this->nick);
        $date=date("Y-m-d");
        $req->setTheDate($date);
        $response=TopClient::getInstance()->execute($req,$this->session);
//        echo "<pre>";print_r($response);exit;
        CustRealTimeReport::deleteAll(["nick"=>$this->nick]);
        $report=new CustRealTimeReport();
        $data=(array)$response->results->rt_rpt_result_entity_d_t_o[0];
        $report->load($data,"");
        $report->thedate=$date;
        $report->nick=$this->nick;
        $report->api_time=date("Y-m-d H:i:s");
        if(!$flag=$report->save()){
            print_r($report->errors);exit;
        }
        return $flag;
    }
}
