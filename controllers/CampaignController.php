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