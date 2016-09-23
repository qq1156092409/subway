<?php

namespace app\controllers;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('127.0.0.1');
        $pheanstalk->useTube('testtube')->put(time());
    }
}