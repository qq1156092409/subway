<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "adgroup".
 *
 * @property string $adgroup_id
 * @property string $nick
 * @property integer $campaign_id
 * @property string $category_ids
 * @property string $num_iid
 * @property integer $default_price
 * @property integer $nosearch_max_price
 * @property string $is_nonsearch_default_price
 * @property string $online_status
 * @property string $offline_type
 * @property string $reason
 * @property string $create_time
 * @property string $modified_time
 * @property string $nonsearch_status
 * @property string $img_url
 * @property integer $mobile_discount
 * @property string $item_price
 * @property string $api_time
 */
class Adgroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adgroup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adgroup_id'], 'required'],
            [['adgroup_id', 'campaign_id', 'num_iid', 'default_price', 'nosearch_max_price', 'mobile_discount'], 'integer'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['item_price'], 'number'],
            [['nick'], 'string', 'max' => 64],
            [['category_ids', 'img_url'], 'string', 'max' => 128],
            [['is_nonsearch_default_price', 'online_status', 'offline_type'], 'string', 'max' => 16],
            [['reason', 'nonsearch_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adgroup_id' => 'Adgroup ID',
            'nick' => 'Nick',
            'campaign_id' => 'Campaign ID',
            'category_ids' => 'Category Ids',
            'num_iid' => 'Num Iid',
            'default_price' => 'Default Price',
            'nosearch_max_price' => 'Nosearch Max Price',
            'is_nonsearch_default_price' => 'Is Nonsearch Default Price',
            'online_status' => 'Online Status',
            'offline_type' => 'Offline Type',
            'reason' => 'Reason',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'nonsearch_status' => 'Nonsearch Status',
            'img_url' => 'Img Url',
            'mobile_discount' => 'Mobile Discount',
            'item_price' => 'Item Price',
            'api_time' => 'Api Time',
        ];
    }


    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }
    public function getCampaign(){
        return $this->hasOne(Campaign::className(),["campaign_id"=>"campaign_id"]);
    }
    public function getCampaignSetting(){
        return $this->hasOne(CampaignSetting::className(),["campaign_id"=>"campaign_id"]);
    }
    public function getKeywords(){
        return $this->hasMany(Keyword::className(),["adgroup_id"=>"adgroup_id"])->inverseOf("adgroup");
    }
    public function getKeywordPools(){
        return $this->hasMany(KeywordPool::className(),["adgroup_id"=>"adgroup_id"])->inverseOf("adgroup");
    }


    //--refresh data
    public function refreshKeywords(){
        $req = new \SimbaKeywordsbyadgroupidGetRequest();
        $req->setNick($this->nick);
        $req->setAdgroupId("".$this->adgroup_id);
        $response=TopClient::getInstance()->execute($req, $this->store->session);
        Keyword::deleteAll(["adgroup_id"=>$this->adgroup_id]);
//        echo "<pre>";print_r($response);exit;
        return self::insertKeywords($response->keywords->keyword);
    }
    public static function insertKeywords($keywordObjs){
        $now=date("Y-m-d H:i:s");
        $columns=(new Keyword())->attributes();
        $rows=[];
        if($keywordObjs){
            foreach($keywordObjs as $keywordObj){
                $keywordObj=(array)$keywordObj;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }elseif(in_array($column,["is_default_price","is_garbage"])){
                        $temp[]=($keywordObj[$column]?1:0);
                    }else{
                        $temp[]=isset($keywordObj[$column])?$keywordObj[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
        return Yii::$app->db->createCommand()->batchInsert(Keyword::tableName(),$columns,$rows)->execute();

    }

    /**
     * 刷新关键词排名
     */
    public function refreshKeywordRankings(){
        $count=0;
        $req = new \SimbaKeywordsRealtimeRankingBatchGetRequest;
        $req->setNick($this->nick);
        $req->setAdGroupId("".$this->adgroup_id);
        $keywordIDs=ArrayHelper::getColumn($this->keywords, "keyword_id");
        $keywordIDs2=array_chunk($keywordIDs,20);
        foreach($keywordIDs2 as $chunk){
            $req->setBidwordIds(implode(",",$chunk));
            $response=TopClient::getInstance()->execute($req, $this->store->session);
//            echo "<pre>";print_r($response);exit;
            Ranking::deleteAll(["bidwordid"=>$chunk]);
            $count+=$this->insertKeywordRankings($response->result->realtime_rank_list->result);
        }
        return $count;
    }
    protected function insertKeywordRankings($rankings){
        $now=date("Y-m-d H:i:s");
        $columns=(new Ranking())->attributes();
        $rows=[];
        if($rankings){
            foreach($rankings as $rankingObj){
                $rankingObj=(array)$rankingObj;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }else{
                        $temp[]=isset($rankingObj[$column])?$rankingObj[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
//        echo "<pre>";print_r($rows);exit;
        return Yii::$app->db->createCommand()->batchInsert(Ranking::tableName(),$columns,$rows)->execute();
    }

    /**
     * 关键词base报表
     */
    public function refreshKeywordBases(){
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $req = new \SimbaRptAdgroupkeywordbaseGetRequest;
        $req->setNick($this->nick);
        $req->setCampaignId("".$this->campaign_id);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setStartTime($yestoday);
        $req->setEndTime($yestoday);
        $req->setSource("SUMMARY");
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setPageSize("500");
        $req->setSearchType("SEARCH");
        $pageNo=1;
        $count=0;
        $client= clone TopClient::getInstance();
        $client->format="json";
        KeywordBase::deleteAll(["adgroupid"=>$this->adgroup_id,"date"=>$yestoday]);
        while(true){
            $req->setPageNo("" . $pageNo);
            $response = $client->execute($req, $this->store->session);
//            echo "<pre>";print_r($response);exit;
            $count+=$this->insertKeywordBases($response->rpt_adgroupkeyword_base_list);
            if(count($response->rpt_adgroupkeyword_base_list)<500){
                break;
            }
            $pageNo++;
        }
    }
    protected function insertKeywordBases($keywordBases){
        $now=date("Y-m-d H:i:s");
        $columns=(new KeywordBase())->attributes();
        $rows=[];
        if($keywordBases){
            foreach($keywordBases as $keywordBase){
                $keywordBase=(array)$keywordBase;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }else{
                        $temp[]=isset($keywordBase[$column])?$keywordBase[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
//        echo "<pre>";print_r($rows);exit;
        return Yii::$app->db->createCommand()->batchInsert(KeywordBase::tableName(),$columns,$rows)->execute();
    }

    /**
     * todo
     */
    public function refreshKeywordEffects(){
//        throw new \Exception("未实现");
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-7 day"));
        $end=date("Y-m-d",strtotime("-1 day"));
        $req = new \SimbaRptAdgroupkeywordeffectGetRequest;
        $req->setNick($this->nick);
        $req->setCampaignId("".$this->campaign_id);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setStartTime($start);
        $req->setEndTime($yestoday);
        $req->setSource("SUMMARY");
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setPageSize("500");
        $req->setSearchType("SEARCH");
        $pageNo=1;
        $count=0;
        $client= clone TopClient::getInstance();
        $client->format="json";
//        KeywordEffect::deleteAll(["adgroupid"=>$this->adgroup_id,"date"=>$yestoday]);
        while(true){
            $req->setPageNo("" . $pageNo);
            $response = $client->execute($req, $this->store->session);
            echo "<pre>";print_r($response);exit;
            $count+=$this->insertKeywordEffects($response->rpt_adgroupkeyword_effect_list);
            if(count($response->rpt_adgroupkeyword_base_list)<500){
                break;
            }
            $pageNo++;
        }
    }
    protected function insertKeywordEffects($keywordEffects){
        $now=date("Y-m-d H:i:s");
        $columns=(new KeywordEffect())->attributes();
        $rows=[];
        if($keywordEffects){
            foreach($keywordEffects as $keywordEffect){
                $keywordEffect=(array)$keywordEffect;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }else{
                        $temp[]=isset($keywordEffect[$column])?$keywordEffect[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
//        echo "<pre>";print_r($rows);exit;
        return Yii::$app->db->createCommand()->batchInsert(KeywordEffect::tableName(),$columns,$rows)->execute();
    }

    /**
     * 推广组报表
     */
    public function refreshBases(){
        $count=0;
        $req = new \SimbaRptAdgroupbaseGetRequest;
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var AdgroupBase $exist */
        $exist=AdgroupBase::find()->where(["nick"=>$this->nick])->andWhere("date > '".$start."'")->orderBy("date desc")->limit(1)->one();
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
//        $req->setSource("SUMMARY");
        $req->setSource("1,2,4,5");
        $req->setAdgroupId("" . $this->adgroup_id);
        $req->setCampaignId("" . $this->campaign_id);
        $req->setSearchType("SEARCH");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("".$pageNo);
            $response=$client->execute($req,$this->store->session);
//            echo "<pre>";print_r($response);exit;
            $count+= $this->insertAdgroupBases($response->rpt_adgroup_base_list);
            if($count<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
    protected function insertAdgroupBases($bases){
        $now=date("Y-m-d H:i:s");
        $columns=(new AdgroupBase())->attributes();
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
            $count+=Yii::$app->db->createCommand()->batchInsert(AdgroupBase::tableName(),$columns,$rows)->execute();
        }
        return $count;
    }
    public function refreshAdgroupEffects(){
        $count=0;
        $req = new \SimbaRptAdgroupeffectGetRequest;
        $req->setSubwayToken($this->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var AdgroupEffect $exist */
        $exist=AdgroupEffect::find()->where(["nick"=>$this->nick])->andWhere("date > '".$start."'")->orderBy("date desc")->limit(1)->one();
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
            $count+= $this->insertAdgroupEffects($response->rpt_adgroup_effect_list);
            if($count<$pageSize){
                break;
            }
        }
        return $count;
    }
    protected function insertAdgroupEffects($effects){
        $now=date("Y-m-d H:i:s");
        $columns=(new AdgroupEffect())->attributes();
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
            $count+=Yii::$app->db->createCommand()->batchInsert(AdgroupEffect::tableName(),$columns,$rows)->execute();
        }
        return $count;
    }
    public function getRecommendKeywords(){
        $req = new \SimbaKeywordsRecommendGetRequest;
        $req->setNick($this->nick);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setSearch("200");
        $req->setPageSize("200");
        $req->setPageNo("1");
        $req->setOrderBy("relevance");
        $response=TopClient::getInstance()->execute($req,$this->store->session);
        $ret=[];
        if($response->recommend_words->recommend_word_list->recommend_word){
            foreach($response->recommend_words->recommend_word_list->recommend_word as $one){
                $ret[]=(array)$one;
            }
        }
        return $ret;
    }
}
