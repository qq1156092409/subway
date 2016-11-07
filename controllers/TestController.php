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
        /** @var Campaign $campaign */
//        $campaign = Campaign::findOne(2709348);
//        echo $campaign->refreshEffectReports();
        /** @var Adgroup $adgroup */
        $adgroup = Adgroup::findOne(718026362);
        echo $adgroup->refreshCreativeEffect();
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}