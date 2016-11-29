<?php

namespace app\controllers;

use app\models\CustBase;
use app\models\CustEffect;
use app\models\execute\StoreExecute;
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
        $balance=$store->balance->attributes;
        $balance["balanceYuan"]=$store->balance->getBalanceYuan();
        return [
            "balance"=>$balance,
            "rtrpt"=>$store->getRtDataReport(),
        ];
    }
    public function actionRefresh($id){
        $store = $this->getStore($id);
        $ret=["result"=>0];
        try{
            $execute = new StoreExecute($store);
            $execute->refresh();
            $ret["result"]=1;
        }catch(\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
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
        \Yii::$app->view->params["store"]=$store;
        return $store;
    }

}