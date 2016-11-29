<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use app\models\multiple\DataReport;
use app\models\multiple\GlobalModel;
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
    public function getItem(){
        return $this->hasOne(Item::className(),["num_id"=>"num_iid"]);
    }
    public function getCreatives(){
        return $this->hasMany(Creative::className(),["adgroup_id"=>"adgroup_id"]);
    }

    //--get
    public function offlineTypeZh(){
        $map=[
            "online"=>"上线",
            "audit_offline"=>"审核下线",
            "crm_offline"=>"CRM下线",
        ];
        return $map[$this->offline_type];
    }
    public function getDataReport($day){
        $start=date("Y-m-d",strtotime("- $day days"));
        /** @var AdgroupBase[] $bases */
        $bases=AdgroupBase::find()->where(["adgroupId"=>$this->adgroup_id])->andWhere("date >='$start'")->all();
        /** @var AdgroupEffect[] $effects */
        $effects=AdgroupEffect::find()->where(["adgroupId"=>$this->adgroup_id])->andWhere("date >='$start'")->all();
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
//        echo "<pre>";print_r($reports);exit;
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
            $count+=GlobalModel::batchInsert(Ranking::className(),$response->result->realtime_rank_list->result);
        }
        return $count;
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
//        $req->setSource("SUMMARY");
        $req->setSource("1,2,4,5");
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
            $count+=GlobalModel::batchInsert(KeywordBase::className(),$response->rpt_adgroupkeyword_base_list);
            if(count($response->rpt_adgroupkeyword_base_list)<500){
                break;
            }
            $pageNo++;
        }
        return $count;
    }

    /**
     * todo
     */
    public function refreshKeywordEffects(){
        $pageNo=1;
        $pageSize=500;
        $count=0;
        $end=date("Y-m-d",strtotime("-1 day"));
        $exist=KeywordEffect::find()->where(["adgroupid"=>$this->adgroup_id])->orderBy("date desc")->limit(1)->one();
        if($exist){
            if($exist->date==$end){
                return $count;
            }
            $start=date("Y-m-d",strtotime("-6 day",strtotime($exist->date)));
            KeywordEffect::deleteAll("adgroupId=".$this->adgroup_id." and date>='".$start."'");
        }else{
            $start=date("Y-m-d",strtotime("-30 day"));
        }
        $req = new \SimbaRptAdgroupkeywordeffectGetRequest;
        $req->setNick($this->nick);
        $req->setCampaignId("".$this->campaign_id);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setStartTime($start);
        $req->setEndTime($end);
        $req->setSource("1,2,4,5");
//        $req->setSource("SUMMARY");
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setPageSize("".$pageSize);
        $req->setSearchType("SEARCH");
        $client= clone TopClient::getInstance();
        $client->format="json";
        while(true){
            $req->setPageNo("" . $pageNo);
            $response = $client->execute($req, $this->store->session);
//            echo "<pre>";print_r($response);exit;
            $count+=GlobalModel::batchInsert(KeywordEffect::className(),$response->rpt_adgroupkeyword_effect_list);
            if(count($response->rpt_adgroupkeyword_effect_list)<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }

    /**
     * 推广组报表
     */
    public function refreshAdgroupBases(){
        $count=0;
        $req = new \SimbaRptAdgroupbaseGetRequest;
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        $start=date("Y-m-d",strtotime("-30 day"));
        /** @var AdgroupBase $exist */
        $exist=AdgroupBase::find()->where(["adgroupId"=>$this->adgroup_id])->orderBy("date desc")->limit(1)->one();
        if($exist){
            if($exist->date>=$yestoday){
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
            $count+=GlobalModel::batchInsert(AdgroupBase::className(),$response->rpt_adgroup_base_list);
            if($count<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
    public function refreshAdgroupEffects(){
        $count=0;
        $req = new \SimbaRptAdgroupEffectGetRequest();
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $yestoday=date("Y-m-d",strtotime("-1 day"));
        /** @var AdgroupBase $exist */
        $exist=AdgroupEffect::find()->where(["adgroupId"=>$this->adgroup_id])->orderBy("date desc")->limit(1)->one();
        if($exist){
            if($exist->date==$yestoday){
                return $count;
            }
            $start=date("Y-m-d",strtotime("-6 day",strtotime($exist->date)));
            AdgroupEffect::deleteAll("adgroupId=".$this->adgroup_id." and date>='".$start."'");
        }else{
            $start=date("Y-m-d",strtotime("-30 day"));
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
            $count+=GlobalModel::batchInsert(AdgroupEffect::className(),$response->rpt_adgroup_effect_list);
            if($count<$pageSize){
                break;
            }
            $pageNo++;
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
    public function refreshCreativeBases(){
        $count=0;
        $pageNo=1;
        $pageSize=500;
        $start=date("Y-m-d",strtotime("-30 day"));
        $end=date("Y-m-d",strtotime("-1 day"));
        /** @var CreativeBase $exist */
        $exist=CreativeBase::find()->where(["adgroupId"=>$this->adgroup_id])->orderBy("date desc")->limit(1)->one();
        if($exist){
            $start = date("Y-m-d", strtotime("+1 day", strtotime($exist->date)));
            if($start>$end){
                return $count;
            }
        }
        $req = new \SimbaRptAdgroupcreativebaseGetRequest;
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $req->setStartTime($start);
        $req->setEndTime($end);
        $req->setCampaignId("".$this->campaign_id);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setSource("1,2,4,5");
//        $req->setSource("SUMMARY");
        $req->setPageSize("".$pageSize);
        $req->setSearchType("SEARCH");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(1){
            $req->setPageNo("".$pageNo);
            $resp = $client->execute($req, $this->store->session);
            $count+=GlobalModel::batchInsert(CreativeBase::className(),$resp->rpt_adgroupcreative_base_list);
            if(count($resp->rpt_adgroupcreative_base_list)<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
    public function refreshCreativeEffects(){
        $count=0;
        $pageNo=1;
        $pageSize=500;
        $end=date("Y-m-d",strtotime("-1 day"));
        /** @var CreativeEffect $exist */
        $exist=CreativeEffect::find()->where(["adgroupId"=>$this->adgroup_id])->orderBy("date desc")->limit(1)->one();
        if($exist){
            if($exist->date==$end){
                return $count;
            }
            $start=date("Y-m-d",strtotime("-6 day",strtotime($exist->date)));
            CreativeEffect::deleteAll("adgroupId=".$this->adgroup_id." and date>='".$start."'");
        }else{
            $start=date("Y-m-d",strtotime("-30 day"));
        }
        $req = new \SimbaRptAdgroupcreativeeffectGetRequest;
        $req->setSubwayToken($this->store->authSign->subway_token);
        $req->setNick($this->nick);
        $req->setStartTime($start);
        $req->setEndTime($end);
        $req->setCampaignId("".$this->campaign_id);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setSource("1,2,4,5");
//        $req->setSource("SUMMARY");
        $req->setPageSize("".$pageSize);
        $req->setSearchType("SEARCH");
        $client=clone TopClient::getInstance();
        $client->format="json";
        while(1){
            $req->setPageNo("".$pageNo);
            $resp = $client->execute($req, $this->store->session);
//            echo "<pre>";print_r($resp);exit;
            $count+=GlobalModel::batchInsert(CreativeEffect::className(),$resp->rpt_adgroupcreative_effect_list);
            if(count($resp->rpt_adgroupcreative_effect_list)<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
    public function refreshCreatives(){
        $req = new \SimbaCreativesGetRequest;
        $req->setNick($this->nick);
        $req->setAdgroupId("".$this->adgroup_id);
        $response=TopClient::getInstance()->execute($req,$this->store->session);
        $creatives=$response->creatives->creative;
        Creative::deleteAll(["adgroup_id"=>$this->adgroup_id]);
        return GlobalModel::batchInsert(Creative::className(),$creatives);
    }

    /**
     * todo 无数据
     * @throws \Exception
     * @throws \app\extensions\custom\taobao\TopException
     */
    public function refreshAdgroupCatmatch(){
        $req = new \SimbaAdgroupCatmatchGetRequest;
        $req->setNick("".$this->nick);
        $req->setAdgroupId("".$this->adgroup_id);
        $response=TopClient::getInstance()->execute($req,$this->store->session);
        echo "<pre>";print_r($response);exit;
    }

    public function refreshSearchCrowds(){
        $req = new \SimbaSerchcrowdGetRequest;
        $req->setNick("".$this->nick);
        $req->setAdgroupId("".$this->adgroup_id);
        $response=TopClient::getInstance()->execute($req,$this->store->session);
//        echo "<pre>";print_r($response);exit;
        SearchCrowd::deleteAll(["adgroup_id"=>$this->adgroup_id]);
        $now=date("Y-m-d H:i:s");
        $count=0;
        foreach($response->adgrouptargetingtags->result as $one){
            $searchCrowd=new SearchCrowd();
            $searchCrowd->attributes=ArrayHelper::merge((array)$one,(array)$one->crowd);
            $searchCrowd->api_time=$now;
            $searchCrowd->adgroup_id=$this->adgroup_id;
            $searchCrowd->save() and $count++;
        }
        return $count;
    }

    /**
     * 实时接口
     * @throws \Exception
     * @throws \app\extensions\custom\taobao\TopException
     */
    public function refreshSearchCrowdReports(){
        $req = new \SimbaRptTargetingtagGetRequest;
        $req->setNick("".$this->nick);
        $req->setCampaignId("".$this->campaign_id);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setStartTime(date("Y-m-d",strtotime("-30 day")));
        $req->setEndTime(date("Y-m-d",strtotime("-1 day")));
        $req->setTrafficType("1,2,4,5");
        $response=TopClient::getInstance()->execute($req,$this->store->session);
        echo "<pre>";print_r($response);exit;
    }
}
