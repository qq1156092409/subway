<?php

namespace app\controllers;
use app\extensions\custom\taobao\TopClient;
use app\models\Adgroup;
use app\models\Campaign;
use app\models\CampaignAreaOption;
use app\models\Channel;
use app\models\CustRealTimeReport;
use app\models\form\SearchCrowdForm;
use app\models\Keyword;
use app\models\multiple\DataReport;
use app\models\Store;
use app\models\VasOrder;
use Pheanstalk\Pheanstalk;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){

        /** @var Store $store */
        /** @var Campaign $campaign */
        /** @var Adgroup $adgroup */

//        $store = Store::findOne(20);
//        $campaign = Campaign::findOne(3792809);
//        $adgroup = Adgroup::findOne(700178905);

        $model=new SearchCrowdForm();
        $model->scenario=SearchCrowdForm::BATCH_STATE;
        $model->ids=[284765396470,284765396472];
        $model->online_status=1;
        echo $model->batchState();
        print_r($model->errors);

    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}