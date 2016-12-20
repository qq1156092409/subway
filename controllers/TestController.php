<?php

namespace app\controllers;
use app\models\Adgroup;
use app\models\Campaign;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){

        /** @var Store $store */
        /** @var Campaign $campaign */
        /** @var Adgroup $adgroup */

        $store = Store::findOne(25);
//        $campaign = Campaign::findOne(3792809);
//        $adgroup = Adgroup::findOne(700328811);

        $store->refreshCrowdTemplates();

    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}