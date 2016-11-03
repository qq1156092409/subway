<?php

namespace app\controllers;
use app\extensions\custom\taobao\TopClient;
use app\models\Adgroup;
use app\models\Campaign;
use app\models\Keyword;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){

    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}