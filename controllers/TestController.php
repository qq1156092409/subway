<?php

namespace app\controllers;
use yii\web\Controller;
use app\extensions\custom\taobao\TopClient;

class TestController extends Controller {
    public function actionIndex(){
        $nick="saxcy09";
        $client = TopClient::getInstance();
        $request=new \SimbaAccountBalanceGetRequest();
        $request->setNick($nick);
        $response=$client->execute($request,"6202514834d8ac34b57827ZZ735ZZe0dd2be2a841720e60348736849");
        print_r($response);
    }
}