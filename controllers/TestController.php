<?php

namespace app\controllers;
use app\models\execute\StoreExecute;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){
        $model=new StoreExecute();
//        $model->nick="zhanglucyy";
        $model->nick="saxcy09";
        $model->refreshCommon();
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('127.0.0.1');
        $pheanstalk->useTube('testtube')->put(time());
    }
}