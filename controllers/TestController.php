<?php

namespace app\controllers;
use app\extensions\custom\taobao\TaobaoClient;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex(){
        $nick="saxcy09";
        $client = TaobaoClient::getInstance($nick);
        $request=new \SimbaAccountBalanceGetRequest();
        $request->setNick($nick);
        $response=$client->execute($request);
    }
}