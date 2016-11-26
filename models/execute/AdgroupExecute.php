<?php

namespace app\models\execute;

use app\extensions\custom\taobao\TopClient;
use app\helpers\ConsoleHelper;
use app\models\Adgroup;
use app\models\CampaignSetting;
use app\models\Creative;
use app\models\CreativeBase;
use app\models\CreativeEffect;
use app\models\Keyword;
use app\models\KeywordBase;
use app\models\KeywordEffect;
use app\models\KeywordPool;
use app\models\KeywordScore;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class AdgroupExecute{
    /**
     * @var Adgroup
     */
    protected $_adgroup;
    public function __construct($adgroup){
        if(is_numeric($adgroup)){
            $this->_adgroup = Adgroup::findOne($adgroup);
        }elseif($adgroup instanceof Adgroup){
            $this->_adgroup=$adgroup;
        }
        if(!$this->_adgroup){
            throw new \Exception("adgroup not found");
        }
    }

    public function refresh($validate=true){
        if($validate){
            $this->checkCampaign();
            $this->checkStore();
        }

        $adgroup=$this->_adgroup;

        $adgroup->refreshAdgroupBases();
        $adgroup->refreshAdgroupEffects();
        $adgroup->refreshCreatives();
        $adgroup->refreshCreativeBases();
        $adgroup->refreshCreativeEffects();
        $adgroup->refreshKeywords();
        $adgroup->refreshKeywordBases();
        $adgroup->refreshKeywordEffects();
//            $adgroup->refreshKeywordRankings();//实时排名 很耗时
    }

    public function createKeywordPools(){
        $count=0;
        $adgroup=$this->_adgroup;
        $recommends=$adgroup->getRecommendKeywords();
        if($recommends){
            foreach($recommends as $recommend){
                $exist=KeywordPool::find()->where([
                    "adgroup_id"=>$adgroup->adgroup_id,
                    "word"=>$recommend["word"],
                ])->exists();
                if(!$exist){
                    $pool=new KeywordPool();
                    $pool->adgroup_id=$adgroup->adgroup_id;
                    $pool->word=$recommend["word"];
                    if(isset($recommend["average_price"]) && 100*$recommend["average_price"]){
                        $pool->price=100*$recommend["average_price"];
                    }
                    $pool->create_time=date("Y-m-d H:i:s");
                    if($pool->save()){
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
    public function addKeywords(){
        $this->checkCampaign();
        $this->checkStore();

        $this->createKeywordPools();//先添加到pool中
        $this->doAddKeywords();
    }
    public function optimize(){
        $this->checkCampaign();
        $this->checkStore();

        $this->deleteKeywords();
        $this->changePrices();
        $this->doAddKeywords();
    }

    protected function checkCampaign(){
        $adgroup=$this->_adgroup;
        if(!$adgroup->campaignSetting){
            throw new \Exception("campaign setting not found");
        }
        if($adgroup->campaignSetting->status==CampaignSetting::STOP){
            throw new \Exception("campaign setting is stop");
        }
    }
    protected function checkStore(){
        $adgroup=$this->_adgroup;
        if(!$adgroup->store){
            throw new \Exception("store not found");
        }
        if(!$adgroup->store->subscribe){
            throw new \Exception("store subscribe not found");
        }
        if($adgroup->store->subscribe->getIsPastDue()){
            throw new \Exception("store is past due");
        }
    }
    protected function deleteKeywords(){
        ConsoleHelper::t("delete keywords");
    }
    protected function changePrices(){
        ConsoleHelper::t("change price");
    }
    protected function doAddKeywords(){
        $adgroup=$this->_adgroup;
        $keywordCount=$adgroup->getKeywords()->count();
        if($keywordCount==200){
            ConsoleHelper::t("add keywords:full keywords");return;
        }
        $req = new \SimbaKeywordsvonAddRequest;
        $req->setNick($adgroup->nick);
        $req->setAdgroupId("".$adgroup->adgroup_id);
        $keywordPrices=[];
        /** @var KeywordPool[] $pools */
        $pools=KeywordPool::find()->where([
            "adgroup_id"=>$adgroup->adgroup_id,
        ])->limit(200-$keywordCount)->all();
        if(!$pools){
            ConsoleHelper::t("add keywords:alternative keyword not found");
            //todo 加入淘词队列
            return;
        }
        foreach($pools as $pool){
            $keywordPrices[]=[
                "word"=>$pool->word,
                "maxPrice"=>0,
                "matchScope"=>4,
                "isDefaultPrice"=>1,
            ];
        }
        KeywordPool::deleteAll(["id"=>ArrayHelper::getColumn($pools,"id")]);//先删除，避免多次Remote service error
        $req->setKeywordPrices(Json::encode($keywordPrices));
        $response=TopClient::getInstance()->execute($req,$adgroup->store->session);
        $count=Adgroup::insertKeywords($response->keywords->keyword);
        ConsoleHelper::t("add keywords:".$count);
    }

    /**
     * 清除数据，避免数据量过大
     */
    public function clean(){
        $adgroup=$this->_adgroup;
        Keyword::deleteAll(["adgroup_id"=>$adgroup->adgroup_id]);
        KeywordBase::deleteAll(["adgroupid"=>$adgroup->adgroup_id]);
        KeywordEffect::deleteAll(["adgroupid"=>$adgroup->adgroup_id]);
        Creative::deleteAll(["adgroup_id"=>$adgroup->adgroup_id]);
        CreativeBase::deleteAll(["adgroupid"=>$adgroup->adgroup_id]);
        CreativeEffect::deleteAll(["adgroupid"=>$adgroup->adgroup_id]);
        //todo
    }

}