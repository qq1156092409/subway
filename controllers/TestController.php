<?php

namespace app\controllers;
use app\models\Adgroup;
use app\models\Campaign;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){
        /** @var Campaign $campaign */
        $campaign = Campaign::findOne(4202895);
        $campaign->refreshRealTimeReport();

        /** @var Adgroup $adgroup */
//        $adgroup = Adgroup::findOne(610043905);
//        $adgroup->getRecommendKeywords();
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
}