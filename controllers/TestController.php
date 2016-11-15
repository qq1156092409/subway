<?php

namespace app\controllers;
use app\extensions\custom\taobao\TopClient;
use app\models\Adgroup;
use app\models\Campaign;
use app\models\Channel;
use app\models\Keyword;
use app\models\Store;
use app\models\VasOrder;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){
        /** @var Campaign $campaign */
        /** @var Adgroup $adgroup */

        $campaigns=Campaign::find()->all();
        foreach($campaigns as $campaign){
            $campaign->refreshBudget();
        }

//        VasOrder::refreshData();

//        $campaign = Campaign::findOne(2709348);
//        echo $campaign->refreshBaseReports();

//        $adgroup = Adgroup::findOne(432098541);
//        echo $adgroup->refreshAdgroupCatmatch();
//        echo "<pre>"; print_r($response);
//        Channel::refreshData();
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}