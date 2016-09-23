<?php

namespace app\models\execute;


use app\models\Store;

class StoreExecute extends Store{
    public function refreshAll(){
        $this->refreshCommon();
        //refresh others
    }
    public function refreshCommon(){
        $store=$this->getStore();
        $store->refreshBalance();
        $store->refreshItems();
        $store->refreshCampaigns();
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