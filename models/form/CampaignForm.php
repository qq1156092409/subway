<?php

namespace app\models\form;
use app\models\Campaign;
use app\models\CampaignSetting;

class CampaignForm extends Campaign {
    const TOGGLE_TRUSTEESHIP="toggle-trusteeship";

    public function scenarios(){
        return [
            self::TOGGLE_TRUSTEESHIP=>["campaign_id"],
        ];
    }
    public function rules(){
        $rules=[
            ["campaign_id","required"],
        ];
        return array_merge(parent::rules(),$rules);
    }
    public function toggleTrusteeship(){
        if(!$this->validate()) return false;
        $campaign=$this->getAr();
        $setting=$campaign->campaignSetting;
        if(!$setting){
            $setting=new CampaignSetting();
            $setting->campaign_id=$this->campaign_id;
            $setting->status=0;
            $setting->create_time=date("Y-m-d H:i:s");
            $campaign->link("campaignSetting",$setting);
        }
        $setting->status=($setting->status+1)%2;
        return $setting->save();
    }
    protected $_ar=false;
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=Campaign::findOne($this->campaign_id);
        }
        return $this->_ar;
    }

}