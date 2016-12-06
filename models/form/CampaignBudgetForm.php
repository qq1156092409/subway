<?php

namespace app\models\form;


use app\extensions\custom\taobao\TopClient;
use app\models\CampaignBudget;

class CampaignBudgetForm extends CampaignBudget
{
    const EDIT="edit";
    public function scenarios(){
        return [
            self::EDIT=>["campaign_id","budget","is_smooth"],
        ];
    }
    public function rules(){
        $rules=[
            [["campaign_id","budget","is_smooth"],"required"],
        ];
        return array_merge(parent::rules(),$rules);
    }

    public function checkBudget($attribute){
        if(!$this->hasErrors()){
            if(!$this->getAr()){
                $this->addError($attribute,"campaign budget not found");
            }
        }
    }

    public function edit(){
        if(!$this->validate()){
            return false;
        }
        $ar=$this->getAr();
        $req = new \SimbaCampaignBudgetUpdateRequest;
        $req->setUseSmooth("".$this->is_smooth);
        $req->setCampaignId("".$this->campaign_id);
        $req->setBudget("".$this->budget);
        $req->setNick("".$ar->nick);
        $response=TopClient::getInstance()->execute($req,$this->store->session);
        $ar->load((array)$response->campaign_budget);
        $ar->api_time=date("Y-m-d H:i:s");
        return $ar->save();
    }

    protected $_ar=false;

    /**
     * @return CampaignBudget
     */
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=CampaignBudget::findOne(["campaign_id"=>$this->campaign_id]);
        }
        return $this->_ar;
    }
}