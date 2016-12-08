<?php

namespace app\models\form;


use app\extensions\custom\taobao\TopClient;
use app\models\CampaignBudget;
use app\models\CampaignSchedule;

class CampaignScheduleForm extends CampaignSchedule
{
    const EDIT="edit";
    public function scenarios(){
        return [
            self::EDIT=>["campaign_id","schedule"],
        ];
    }
    public function rules(){
        $rules=[
            [["campaign_id","schedule"],"required"],
        ];
        return array_merge(parent::rules(),$rules);
    }

    public function checkSchedule($attribute){
        if(!$this->hasErrors()){
            if(!$this->getAr()){
                $this->addError($attribute,"campaign schedule not found");
            }
        }
    }

    public function edit(){
        if(!$this->validate()){
            return false;
        }
        $ar=$this->getAr();
        $req = new \SimbaCampaignScheduleUpdateRequest;
        $req->setCampaignId("".$this->campaign_id);
        $req->setSchedule("".$this->schedule);
        $req->setNick("".$ar->nick);
        $response=TopClient::getInstance()->execute($req,$ar->store->session);
        $ar->load((array)$response->campaign_schedule,"");
        $ar->api_time=date("Y-m-d H:i:s");
        return $ar->save();
    }

    protected $_ar=false;

    /**
     * @return CampaignSchedule
     */
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=CampaignSchedule::findOne(["campaign_id"=>$this->campaign_id]);
        }
        return $this->_ar;
    }
}