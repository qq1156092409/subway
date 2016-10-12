<?php

namespace app\controllers;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){
        /** @var Store $store */
        $store=Store::findOne(["nick"=>"saxcy09"]);
        echo $store->refreshCustEffects();
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
}