<?php

namespace app\models\execute;


use app\models\Adgroup;
use app\models\Campaign;
use app\models\Store;

class StoreExecute{
    public $nick;

    public function refreshAll(){
        $this->refreshCommon();
        //refresh others
    }
    public function refreshCommon(){
        $store=$this->getStore();
//        $store->refreshAuthSign();
//        $store->refreshSubscribe();
//        $store->refreshBalance();
//        $store->refreshItems();
//        $store->refreshCampaigns();
//        /** @var Campaign $campaign */
//        foreach($store->campaigns as $campaign){
//            $campaign->refreshAdgroups();
//        }
        /** @var Adgroup $adgroup */
        foreach($store->adgroups as $adgroup){
//            $adgroup->refreshKeywords();
//            $adgroup->refreshKeywordBases();
//            $adgroup->refreshKeywordEffects();
            $adgroup->refreshKeywordRankings();
        }
    }
    public function changePrice(){

    }
    public function addKeywords(){

    }
    public function deleteKeywords(){

    }

    protected $store=false;

    /**
     * @return Store
     */
    public function getStore(){
        if($this->store===false){
            $this->store=Store::findOne(["nick"=>$this->nick]);
        }
        return $this->store;
    }
}