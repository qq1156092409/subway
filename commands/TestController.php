<?php

namespace app\commands;


use app\extensions\custom\taobao\TopClient;
use Pheanstalk\Pheanstalk;
use yii\console\Controller;

class TestController extends Controller {
    public function actionIndex(){
        $nick="saxcy09";
        $client = TopClient::getInstance();
        $request=new \SimbaAccountBalanceGetRequest();
        $request->setNick($nick);
        $response=$client->execute($request,"6202514834d8ac34b57827ZZ735ZZe0dd2be2a841720e60348736849");
        print_r($response);
    }
    public function actionQueue(){
        $pheanstalk = new Pheanstalk('127.0.0.1');

        $job = $pheanstalk ->watch('tubeName') ->ignore('default') ->reserve();
        $time=$job->getData();
        echo date("Y-m-d H:i:s",$time);
        $pheanstalk->delete($job);
    }

}