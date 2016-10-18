<?php

namespace app\models\execute;

use app\helpers\ConsoleHelper;
use app\models\Adgroup;
use app\models\CampaignSetting;
use app\models\KeywordPool;

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
        ConsoleHelper::t("add keywords");
    }

}