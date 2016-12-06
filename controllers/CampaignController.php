<?php
namespace app\controllers;

use app\models\Campaign;
use app\models\form\CampaignForm;
use app\models\multiple\DataReport;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class CampaignController extends Controller
{

    public function actionIndex($id){
        $campaign = $this->getCampaign($id);
        $reports=$campaign->getDataReports(7);
        $rtrpt=$campaign->getRtDataReport();
        $totalReport = DataReport::merge($reports);

        return $this->render("campaign",[
            "store"=>$campaign->store,
            "campaign"=>$campaign,
            "reports"=>$reports,
            "totalReport"=>$totalReport,
            "rtrpt"=>$rtrpt,
        ]);
    }

    public function actionIndexRefresh($id){
        $campaign = $this->getCampaign($id);
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return [];
    }

    public function actionToggleTrusteeship($id){
        $ret=["id"=>$id,"status"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::TOGGLE_TRUSTEESHIP;
        $model->campaign_id=$id;
        \Yii::$app->response->format=Response::FORMAT_JSON;
        if($model->toggleTrusteeship()){
            $ret["status"]=1;
            $ret["isTrusteeship"]=$model->getAr()->isTrusteeship();
        }else{
            $ret["message"]=current($model->errors)[0];
        }
        return $ret;
    }

    public function actionOffline($id){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::OFFLINE;
        $model->campaign_id=$id;
        if($model->offline()){
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }else{
            foreach($model->errors as $error){
                $ret["message"]=$error[0];break;
            }
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionOnline($id){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::ONLINE;
        $model->campaign_id=$id;
        if($model->online()){
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }else{
            foreach($model->errors as $error){
                $ret["message"]=$error[0];break;
            }
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionRename(){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::RENAME;
        $model->load(\Yii::$app->request->post(),"");
        if($model->rename()){
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }else{
            foreach($model->errors as $error){
                $ret["message"]=$error[0];break;
            }
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionBatchOffline(){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::BATCH_OFFLINE;
        $model->load(\Yii::$app->request->post(),"");
        $data=$model->batchOffline();
        if($data!==false){
            $ret["result"]=1;
            $ret["data"]=$data;
        }else{
            foreach($model->errors as $error){
                $ret["message"]=$error[0];break;
            }
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    /**
     * @param $id
     * @return Campaign
     * @throws NotFoundHttpException
     */
    protected function getCampaign($id){
        $campaign = Campaign::findOne($id);
        if(!$campaign){
            throw new NotFoundHttpException("campaign not found");
        }
        \Yii::$app->view->params["store"]=$campaign->store;
        return $campaign;
    }
}