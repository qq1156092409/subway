<?php

namespace app\commands;


use app\extensions\custom\taobao\TopClient;
use app\models\Balance;
use app\models\execute\BalanceExecute;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\console\Controller;

class TestController extends Controller {
    public function actionIndex(){

    }
    public function actionQueue(){
        $pheanstalk = new Pheanstalk('127.0.0.1');

        $job = $pheanstalk ->watch('testtube') ->ignore('default') ->reserve();
        $time=$job->getData();
        echo date("Y-m-d H:i:s",$time);
        $pheanstalk->delete($job);
    }

}