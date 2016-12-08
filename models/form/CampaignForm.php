<?php

namespace app\models\form;
use app\extensions\custom\taobao\TopClient;
use app\models\Campaign;
use app\models\CampaignSetting;
use yii\web\BadRequestHttpException;

class CampaignForm extends Campaign {
    const TOGGLE_TRUSTEESHIP="toggle-trusteeship";
    const TOGGLE_STATUS="toggle-status";
    const RENAME="rename";
    const BATCH_STATUS="batch-status";

    public $ids;

    public function scenarios(){
        return [
            self::TOGGLE_TRUSTEESHIP=>["campaign_id"],
            self::TOGGLE_STATUS=>["campaign_id"],
            self::RENAME=>["campaign_id","title"],
            self::BATCH_STATUS=>["ids","online_status"],
        ];
    }
    public function rules(){
        $rules=[
            [["campaign_id","ids"],"required"],
            ["campaign_id","checkCampaign"],
            ["campaign_id","checkUser"],
        ];
        return array_merge(parent::rules(),$rules);
    }
    public function checkCampaign($attribute){
        if(!$this->hasErrors()){
            if(!$campaign=$this->getAr()){
                $this->addError($attribute,"campaign not found");
            }
        }
    }
    public function checkUser($attribute){
        if(!$this->hasErrors()){
            //todo
        }
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

    public function toggleStatus(){
        if(!$this->validate()) return false;
        $campaign=$this->getAr();
        return $campaign->apiUpdate(["online_status"=>$campaign->online_status=="online"?"offline":"online"]);
    }

    public function rename(){
        if(!$this->validate()) return false;
        $campaign=$this->getAr();
        return $campaign->apiUpdate(["title"=>$this->title]);
    }

    public function batchStatus(){
        if(!$this->validate()) return false;
        $ret=[
            "total"=>count($this->ids),
            "success"=>0,
            "error"=>0,
            "campaigns"=>[],
            "messages"=>[],
        ];
        $campaigns=Campaign::find()->where([
            "campaign_id"=>$this->ids,
            "online_status"=>$this->online_status=="online"?"offline":"online",
        ])->all();
        if($campaigns){
            foreach($campaigns as $campaign){
                $model=new CampaignForm();
                $model->scenario=self::TOGGLE_STATUS;
                $model->campaign_id=$campaign->campaign_id;
                $model->setAr($campaign);
                try{
                    $flag=$model->toggleStatus();
                    if(!$flag){
                        foreach($model->errors as $errors){
                            throw new BadRequestHttpException($errors[0]);
                        }
                    }
                    $ret["success"]++;
                    $ret["campaigns"][]=$model->getAr();
                }catch (\Exception $e){
                    $ret["error"]++;
                    $ret["messages"][$campaign->campaign_id]=$e->getMessage();
                }
            }
        }
        return $ret;
    }

    protected $_ar=false;

    /**
     * @return Campaign
     */
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=Campaign::findOne($this->campaign_id);
        }
        return $this->_ar;
    }
    public function setAr($campaign){
        $this->_ar=$campaign;
    }
}