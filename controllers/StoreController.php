<?php

namespace app\controllers;

use app\models\CustBase;
use app\models\CustEffect;
use app\models\Store;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class StoreController extends Controller
{
    public function actionIndex($id=null,$nick=null){
        $store = $this->getStore($id,$nick);
        $start=date("Y-m-d",strtotime("-7 day"));
        $bases=CustBase::find()->where([
            "nick"=>$store->nick,
        ])->andWhere("date>='{$start}'")->all();
        $effects=CustEffect::find()->where([
            "nick"=>$store->nick,
        ])->andWhere("date>='{$start}'")->all();
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
    protected function getStore($id,$nick){
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