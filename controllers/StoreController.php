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
        $totalBase=new CustBase();
        if($bases){
            foreach($bases as $base){
                $totalBase->impressions+=$base->impressions;
                $totalBase->click+=$base->click;
                $totalBase->cost+=$base->cost;
            }
        }

        return $this->renderPartial("store",[
            "store"=>$store,
            "bases"=>$bases,
            "effects"=>$effects,
            "totalBase"=>$totalBase,
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