<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
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
        $pageSize="200";
        $req=new \SimbaAdgroupOnlineitemsvonGetRequest;
        $req->setNick($this->nick);
        $req->setPageSize($pageSize);
        $req->setPageNo("1");
        $response=TopClient::getInstance()->execute($req, $this->session);
//        echo "<pre>";print_r($response);exit;
        Item::deleteAll(["nick"=>$this->nick]);
        $count+=$this->insertItems($response->page_item->item_list->subway_item);
        $totalPage=ceil($response->page_item->total_item/$pageSize);
        if($totalPage>1){
            for($i=2;$i<=$totalPage;$i++){
                $req->setPageNo("".$i);
                $response=TopClient::getInstance()->execute($req, $this->session);
                $count+=$this->insertItems($response->page_item->item_list->subway_item);
            }
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
        $req->setSource("SUMMARY");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->session);
//            echo "<pre>";print_r($response);exit;
            $count+= $this->insertCustBases($response->rpt_cust_base_list);
            if($count<$pageSize){
                break;
            }
        }
        return $count;
    }
    protected function insertCustBases($bases){
        $now=date("Y-m-d H:i:s");
        $columns=(new CustBase())->attributes();
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
            $count+=Yii::$app->db->createCommand()->batchInsert(CustBase::tableName(),$columns,$rows)->execute();
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
        $req->setSource("SUMMARY");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->session);
//            echo "<pre>";print_r($response);exit;
            $count+= $this->insertCustEffects($response->rpt_cust_effect_list);
            if($count<$pageSize){
                break;
            }
        }
        return $count;
    }
    protected function insertCustEffects($effects){
        $now=date("Y-m-d H:i:s");
        $columns=(new CustEffect())->attributes();
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
            $count+=Yii::$app->db->createCommand()->batchInsert(CustEffect::tableName(),$columns,$rows)->execute();
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
        CustRealTimeReport::deleteAll(["nick"=>$this->nick,"thedate"=>$date]);
        $report=new CustRealTimeReport();
        $datas=$response->results->rt_rpt_result_entity_d_t_o;
        if($datas){
            foreach($datas as $data){
                $data=(array)$data;
                foreach($data as $k=>$v){
                    if(in_array($k,["nick","thedate"]))continue;
                    $report->$k+=$v;
                }
            }
        }
        $report->thedate=$date;
        $report->nick=$this->nick;
        $report->api_time=date("Y-m-d H:i:s");
        $report->calculate();
        if(!$flag=$report->save()){
            print_r($report->errors);exit;
        }
        return $flag;
    }
}
