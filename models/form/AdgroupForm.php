<?php

namespace app\models\form;


use app\extensions\custom\taobao\TopClient;
use app\models\Adgroup;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;

class AdgroupForm extends Adgroup
{
    const TOGGLE_STATUS="toggleStatus";
    const BATCH_STATUS="batchStatus";
    const DESTROY="destroy";
    const BATCH_DESTROY="batchDestroy";

    public $ids;

    public function scenarios(){
        return [
            self::TOGGLE_STATUS=>["adgroup_id"],
            self::DESTROY=>["adgroup_id"],
            self::BATCH_STATUS=>["ids","online_status"],
        ];
    }
    public function rules(){
        $rules=[
            [["adgroup_id","ids"],"required"],
            ["adgroup_id","checkAdgroup"],
            ["adgroup_id","checkUser"],
        ];
        return ArrayHelper::merge(parent::rules(),$rules);
    }

    public function checkAdgroup($attribute){
        if(!$this->hasErrors()){
            if(!$this->getAr()){
                $this->addError($attribute,"未找到推广组");
            }
        }
    }
    public function checkUser($attribute){
        if(!$this->hasErrors()){
            //todo
        }
    }

    public function toggleStatus(){
        if(!$this->validate()){
            return false;
        }
        $ar=$this->getAr();
        $req = new \SimbaAdgroupsUpdateRequest;
        $req->setNick("".$ar->nick);
        $req->setAdgroupId("".$ar->adgroup_id);
        $req->setOnlineStatus("".$ar->online_status=="online"?"offline":"online");

        $response=TopClient::getInstance()->execute($req,$ar->store->session);
        $ar->load((array)$response->adgroup,"");
        $ar->api_time=date("Y-m-d H:i:s");
        return $ar->save();
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
        /** @var Adgroup[] $adgroups */
        $adgroups=Adgroup::find()->where([
            "adgroup_id"=>$this->ids,
            "online_status"=>$this->online_status=="online"?"offline":"online",
        ])->all();
        if($adgroups){
            foreach($adgroups as $adgroup){
                $model=new AdgroupForm();
                $model->scenario=self::TOGGLE_STATUS;
                $model->adgroup_id=$adgroup->adgroup_id;
                $model->setAr($adgroup);
                try{
                    $flag=$model->toggleStatus();
                    if(!$flag){
                        foreach($model->errors as $errors){
                            throw new BadRequestHttpException($errors[0]);
                        }
                    }
                    $ret["success"]++;
                    $ret["adgroups"][]=$model->getAr();
                }catch (\Exception $e){
                    $ret["error"]++;
                    $ret["messages"][$adgroup->adgroup_id]=$e->getMessage();
                }
            }
        }
        return $ret;
    }

    public function destroy(){
        if(!$this->validate()){
            return false;
        }
        $ar=$this->getAr();
        $req=new \SimbaAdgroupDeleteRequest();
        $req->setNick("".$ar->nick);
        $req->setAdgroupId("".$ar->adgroup_id);
        $response=TopClient::getInstance()->execute($req,$ar->store->session);
        $flag=$ar->delete();
        if($flag){
            //todo delete other
        }
        return $flag;
    }

    public function batchDestroy(){
        if(!$this->validate()) return false;
        $ret=[
            "total"=>count($this->ids),
            "success"=>0,
            "error"=>0,
            "campaigns"=>[],
            "messages"=>[],
        ];
        /** @var Adgroup[] $adgroups */
        $adgroups=Adgroup::find()->where([
            "adgroup_id"=>$this->ids,
        ])->all();
        if($adgroups){
            foreach($adgroups as $adgroup){
                $model=new AdgroupForm();
                $model->scenario=self::BATCH_DESTROY;
                $model->adgroup_id=$adgroup->adgroup_id;
                $model->setAr($adgroup);
                try{
                    $flag=$model->destroy();
                    if(!$flag){
                        foreach($model->errors as $errors){
                            throw new BadRequestHttpException($errors[0]);
                        }
                    }
                    $ret["success"]++;
                    $ret["adgroups"][]=$model->adgroup_id;
                }catch (\Exception $e){
                    $ret["error"]++;
                    $ret["messages"][$adgroup->adgroup_id]=$e->getMessage();
                }
            }
        }
        return $ret;
    }

    protected $_ar=false;
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=Adgroup::findOne($this->adgroup_id);
        }
        return $this->_ar;
    }
    public function setAr($adgroup){
        $this->_ar=$adgroup;
    }
}