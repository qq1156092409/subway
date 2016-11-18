<?php
namespace app\controllers;

use app\models\Campaign;
use app\models\multiple\DataReport;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CampaignController extends Controller
{
    public function actionIndex($id){
        $campaign = $this->getCampaign($id);
        $reports=$campaign->getDataReports(7);
//        $rtrpt=$campaign->getRtrpt();
        $totalReport = DataReport::merge($reports);

        return $this->render("campaign",[
            "store"=>$campaign->store,
            "campaign"=>$campaign,
            "reports"=>$reports,
            "totalReport"=>$totalReport,
        ]);
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