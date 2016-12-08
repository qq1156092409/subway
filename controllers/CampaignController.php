<?php
namespace app\controllers;

use app\models\Campaign;
use app\models\form\CampaignForm;
use app\models\multiple\DataReport;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class CampaignController extends Controller
{
    public $enableCsrfValidation=false;

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

    public function actionToggleStatus($id){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::TOGGLE_STATUS;
        $model->campaign_id=$id;
        try{
            $flag=$model->toggleStatus();
            if(!$flag){
                foreach($model->errors as $error){
                    throw new BadRequestHttpException($error[0]);
                }
            }
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionRename(){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::RENAME;
        $model->load(\Yii::$app->request->post(),"");
        try{
            $flag=$model->rename();
            if(!$flag){
                foreach($model->errors as $error){
                    throw new BadRequestHttpException($error[0]);
                }
            }
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionBatchStatus(){
        $ret=["result"=>0];
        $model=new CampaignForm();
        $model->scenario=CampaignForm::BATCH_STATUS;
        $model->load(\Yii::$app->request->post(),"");
        $data=$model->batchStatus();
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