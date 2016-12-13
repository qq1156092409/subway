<?php

namespace app\models\form;


use app\extensions\custom\taobao\TopClient;
use app\models\Crowd;
use app\models\SearchCrowd;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class SearchCrowdForm extends SearchCrowd
{
    const BATCH_ADD="batchAdd";
    const BATCH_STATE="batchState";
    const BATCH_DISCOUNT="batchDiscount";
    const BATCH_DESTROY="batchDestroy";

    public $ids;
    public $datas;

    public function scenarios(){
        return [
            self::BATCH_ADD=>["adgroup_id","datas"],
            self::BATCH_STATE=>["ids","online_status"],
            self::BATCH_DISCOUNT=>["ids","discount"],
            self::BATCH_DESTROY=>["ids"],
        ];
    }
    public function rules(){
        $rules=[
            ["ids","checkSearchCrowds"],
        ];
        return array_merge(parent::rules(),$rules);
    }
    public function checkSearchCrowds($attribute){
        if(!$this->hasErrors()){
            $ars=$this->getArs();
            if(!$ars){
                $this->addError($attribute,"search crowd not found");return;
            }
            $adgroupIds=ArrayHelper::getColumn($ars,"adgroup_id");
            if(count(array_unique($adgroupIds))>1){
                $this->addError($attribute,"search crowd has different adgroup");return;
            }
        }
    }

    public function checkAdgroup($attribute){
        if(!$this->hasErrors()){
            $adgroup=$this->adgroup;
            if(!$adgroup){
                $this->addError($attribute,"adgroup not found");
            }
            //todo check user
        }
    }

    public function batchState(){
        if(!$this->validate()) return false;
        $searchCrowds=$this->getArs();
        $adgroup=$searchCrowds[0]->adgroup;

        $req = new \SimbaSerchcrowdStateBatchUpdateRequest;
        $req->setNick("".$adgroup->nick);
        $req->setAdgroupCrowdIds(implode(",",$this->ids));
        $req->setAdgroupId("".$adgroup->adgroup_id);
        $req->setState("".$this->online_status);
        $response=TopClient::getInstance()->execute($req,$adgroup->store->session);
        return SearchCrowd::updateAll(["online_status"=>$this->online_status],["id"=>$this->ids])>0;
    }

    public function batchAdd(){
        if(!$this->validate()) return false;
        /** @var Crowd[] $crowds */
        $crowds=Crowd::find()->where(["dim_id"=>ArrayHelper::getColumn($this->datas,"dim_id")])->indexBy("dim_id")->all();
        $tags=[];
        foreach($this->datas as $data){
            $crowd=$crowds[$data];
            $temp=[
                "crowdDTO"=>[
                    "templateId"=>$crowd->crowd_type_id,
                    "name"=>$crowd->tag_name,
                    "tagList"=>[
                        [
                            "dimId"=>$crowd->dim_id,
                            "tagId"=>$crowd->tag_id,
                            "tagName"=>$crowd->tag_name,
                            "optionGroupId"=>$crowd->option_group_id,
                        ],
                    ],
                    "isDefaultPrice"=>"0",
                    "discount"=>$data["discount"]+100,
                ],
            ];
            $tags[]=$temp;
        }

        $req = new \SimbaSearchcrowdBatchAddRequest;
        $req->setNick("".$this->adgroup->nick);
        $req->setAdgroupId("".$this->adgroup_id);
        $req->setAdgroupTargetingTags(Json::encode($tags));
        $response=TopClient::getInstance()->execute($req);
//        echo "<pre>";print_r($response);exit;
        return SearchCrowd::batchInsert($response->adgrouptargetingtags,["adgroup_id"=>$this->adgroup_id]);
    }

    public function batchDestroy(){
        $req = new \SimbaSerchcrowdBatchDeleteRequest();
        $ars=$this->getArs();
        $adgroup=$ars[0]->adgroup;
        $req->setNick("".$adgroup->nick);
        $req->setAdgroupCrowdIds(implode(",",$this->ids));
        $response=TopClient::getInstance()->execute($req);
//        echo "<pre>";print_r($response);exit;
        return SearchCrowd::deleteAll(["id"=>$this->ids])>0;
    }

    public function batchDiscount(){
        $req = new \SimbaSerchcrowdPriceBatchUpdateRequest;
        $ars=$this->getArs();
        $adgroup=$ars[0]->adgroup;
        $req->setNick("".$adgroup->nick);
        $req->setAdgroupCrowdIds(implode(",",$this->ids));
        $req->setDiscount($this->discount);
        $response=TopClient::getInstance()->execute($req);
//        echo "<pre>";print_r($response);exit;
        return SearchCrowd::updateAll(["discount"=>$this->discount],["id"=>$this->ids])>0;
    }

    protected $_ars=false;
    public function getArs(){
        if($this->_ars===false){
            $this->_ars=SearchCrowd::findAll($this->ids);
        }
        return $this->_ars;
    }
}