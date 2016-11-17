<?php

namespace app\controllers;

use app\models\CustBase;
use app\models\CustEffect;
use app\models\multiple\DataReport;
use app\models\Store;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class StoreController extends Controller
{
    public function actionIndex($id=null,$nick=null){
        $store = $this->getStore($id,$nick);
        $rtrpt=$store->getRtDataReport();
        $reports=$store->getDataReports(7);
        $totalReport=DataReport::merge($reports);

        return $this->render("store",[
            "store"=>$store,
            "totalReport"=>$totalReport,
            "reports"=>$reports,
            "rtrpt"=>$rtrpt,
        ]);
    }
    public function actionIndexRefresh($id){
        $store = $this->getStore($id);
        if(!($store->realTimeReport && (time()-strtotime($store->realTimeReport->api_time))<3600)){
            $store->refreshRealTimeReport();
            unset($store->realTimeReport);
        }
        if(!($store->balance && (time()-strtotime($store->balance->api_time))<3600)){
            $store->refreshBalance();
            unset($store->balance);
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return [
            "balance"=>$store->balance,
            "rtrpt"=>$store->getRtDataReport(),
        ];
    }

    protected function getStore($id,$nick=null){
        /** @var Store $store */
        $id and $store = Store::findOne($id);
        if(!isset($store) && $nick){
            $store = Store::findOne(["nick"=>$nick]);
        }
        if(!$store){
            throw new NotFoundHttpException("store not found");
        }
        return $store;
    }

}