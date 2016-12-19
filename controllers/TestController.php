<?php

namespace app\controllers;
use app\extensions\custom\qq\QcloudApi;
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
//        $adgroup = Adgroup::findOne(700328811);
        $wenzhi=QcloudApi::loadWenzhi();

        $package = array(
            "text"=>"汽车座椅收纳袋挂袋多功能车内杂物袋椅背置物袋车用车载储物袋皮",
            "code"=>2097152,
            "type"=>1,
        );
        $a = $wenzhi->LexicalAnalysis($package);
        echo "<pre>";print_r($a);

    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}