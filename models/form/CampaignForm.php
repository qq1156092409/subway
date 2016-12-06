<?php

namespace app\models\form;
use app\extensions\custom\taobao\TopClient;
use app\models\Campaign;
use app\models\CampaignSetting;
use yii\web\BadRequestHttpException;

class CampaignForm extends Campaign {
    const TOGGLE_TRUSTEESHIP="toggle-trusteeship";
    const ONLINE="online";
    const OFFLINE="offline";
    const RENAME="rename";
    const BATCH_ONLINE="batch-online";
    const BATCH_OFFLINE="batch-offline";

    public $ids;

    public function scenarios(){
        return [
            self::TOGGLE_TRUSTEESHIP=>["campaign_id"],
            self::ONLINE=>["campaign_id"],
            self::OFFLINE=>["campaign_id"],
            self::RENAME=>["campaign_id","title"],
            self::BATCH_ONLINE=>["ids"],
            self::BATCH_OFFLINE=>["ids"],
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

    public function offline(){
        if(!$this->validate()) return false;
        return $this->_update(["online_status"=>"offline"]);
    }
    public function online(){
        if(!$this->validate()) return false;
        return $this->_update(["online_status"=>"online"]);
    }

    public function rename(){
        if(!$this->validate()) return false;
        return $this->_update(["title"=>$this->title]);
    }

    /**
     * @return false|array
     */
    public function batchOffline(){
        if(!$this->validate()) return false;
        $ret=[
            "total"=>count($this->ids),
            "success"=>0,
            "error"=>0,
            "campaigns"=>[],
            "messages"=>[],
        ];
        foreach($this->ids as $id){
            $model=new self();
            $model->scenario=self::OFFLINE;
            $model->campaign_id=$id;
            try{
                if(!$model->offline()){
                    $message="";
                    foreach($model->errors as $errors){
                        $message=$errors[0];break;
                    }
                    throw new BadRequestHttpException($message);
                }
                $ret["success"]++;
                $ret["campaigns"][]=$model->getAr();
            }catch (\Exception $e){
                $ret["error"]++;
                $ret["messages"][$id]=$e->getMessage();
            }

        }
        return $ret;
    }

    public function batchOnline(){
        if(!$this->validate()) return false;
        $ret=[
            "total"=>count($this->ids),
            "success"=>0,
            "error"=>0,
            "campaigns"=>[],
            "messages"=>[],
        ];
        foreach($this->ids as $id){
            $model=new self();
            $model->scenario=self::ONLINE;
            $model->campaign_id=$id;
            try{
                if(!$model->online()){
                    $message="";
                    foreach($model->errors as $errors){
                        $message=$errors[0];break;
                    }
                    throw new BadRequestHttpException($message);
                }
                $ret["success"]++;
                $ret["campaigns"][]=$model->getAr();
            }catch (\Exception $e){
                $ret["error"]++;
                $ret["messages"][$id]=$e->getMessage();
            }

        }
        return $ret;
    }

    protected function _update($attributes){
        $campaign=$this->getAr();
        $req = new \SimbaCampaignUpdateRequest;
        $req->setNick("".$campaign->nick);
        $req->setCampaignId("".$campaign->campaign_id);
        $req->setTitle("".$campaign->title);
        $req->setOnlineStatus("".$campaign->online_status);

        isset($attributes["online_status"]) and $req->setOnlineStatus("".$attributes["online_status"]);
        isset($attributes["title"]) and $req->setTitle("".$attributes["title"]);

        $response=TopClient::getInstance()->execute($req,$campaign->store->session);
        $campaign->load((array)$response->campaign,"");
        $campaign->api_time=date("Y-m-d H:i:s");
        return $campaign->save();
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
}