<?php

namespace app\commands;


use Pheanstalk\Pheanstalk;
use yii\console\Controller;

class TestController extends Controller {
    public function actionIndex(){
        $start=time();
        sleep(3);
        echo "time:".(time()-$start);
    }
    public function actionQueue(){
        $pheanstalk = new Pheanstalk('127.0.0.1');

        $job = $pheanstalk ->watch('testtube') ->ignore('default') ->reserve();
        $time=$job->getData();
        echo date("Y-m-d H:i:s",$time);
        $pheanstalk->delete($job);
    }

}