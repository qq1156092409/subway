<?php

namespace app\controllers;

use app\models\CustBase;
use app\models\CustEffect;
use app\models\Store;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class StoreController extends Controller
{
    public function actionIndex($id=null,$nick=null){
        $store = $this->getStore($id,$nick);
        $bases=$store->getBases(7);
        $effects=$store->getEffects(7);
        $totalBase = CustBase::merge($bases);
        $totalEffect = CustEffect::merge($effects);

        return $this->render("store",[
            "store"=>$store,
            "bases"=>$bases,
            "effects"=>$effects,
            "totalBase"=>$totalBase,
            "totalEffect"=>$totalEffect,
        ]);
    }
    public function actionIndexRefresh($id){
        $store = $this->getStore($id);
//        $store->refreshRealTimeReport();
//        $store->refreshBalance();
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return [
            "balance"=>$store->balance,
//            "rtrpt"=>$store->realtimeReport,
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