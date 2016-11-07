<?php

namespace app\models\execute;

use app\models\Adgroup;
use app\models\Campaign;
use app\models\Store;

class StoreExecute{
    /**
     * @var Store
     */
    protected $_store;

    public function __construct($store){
        if($store instanceof Store){
            $this->_store=$store;
        }else{
            throw new \Exception("store invalid");
        }
        if(!$this->_store->session){
            throw new \Exception("store session invalid");
        }
    }
    public function getStore(){
        return $this->_store;
    }
    //--validate
    protected function checkSubscribe(){
        if($this->_store->subscribe->isPastDue==false){
            return;
        }
        throw new \Exception("store is past due");
    }
    protected function checkAuthSign(){
        if($this->_store->authSign->subway_token){
            return;
        }
        throw new \Exception("store subway token invalid");
    }

    protected function refreshStatic(){
        $store=$this->_store;
        $store->refreshAuthSign();
        $store->refreshSubscribe();
    }
    protected function refreshCommon(){
        $store=$this->_store;
        $store->refreshBalance();
        $store->refreshItems();
        $store->refreshCustBases();
        $store->refreshCustEffects();
        $store->refreshCampaigns();
        /** @var Campaign $campaign */
        foreach($store->campaigns as $campaign){
            $campaign->refreshAdgroups();
            $campaign->refreshBaseReports();
            $campaign->refreshEffectReports();
        }
        /** @var Adgroup $adgroup */
        foreach($store->adgroups as $adgroup){
            $adgroup->refreshKeywords();
            $adgroup->refreshKeywordBases();
            $adgroup->refreshKeywordEffects();
            $adgroup->refreshCreativeBases();
            $adgroup->refreshCreativeEffects();
//            $adgroup->refreshKeywordRankings();//实时排名 很耗时
        }
    }
    protected function deleteKeywords(){

    }
    protected function changePrice(){

    }
    protected function addKeywords(){

    }

    //------------execute----------------

    /**
     * 日常优化
     */
    public function optimize(){
        //validate
        $this->checkAuthSign();
        $this->checkSubscribe();

        $this->refreshCommon();
        $this->deleteKeywords();
        $this->changePrice();
        $this->addKeywords();
    }

    /**
     * 初次下载数据
     */
    public function download(){
        $this->refreshStatic();
        //validate
        $this->checkAuthSign();
//        $this->checkSubscribe();

        $this->refreshCommon();
    }

    public function refresh(){
        $this->checkAuthSign();

        $this->refreshCommon();
    }

    /**
     * 抢排名
     */
    public function rank(){

    }

}