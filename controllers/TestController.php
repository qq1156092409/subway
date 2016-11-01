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
//        $campaign = Campaign::findOne(4202895);
//        $campaign->refreshRealTimeReport();

        /** @var Adgroup $adgroup */
        $adgroup = Adgroup::findOne(610043905);
        echo $adgroup->refreshBases();
//        $adgroup->getRecommendKeywords();

        /** @var Store $store */
//        $store = Store::findOne(20);
//        $store->refreshRealTimeReport();

//        $keyword_id="79188513204";
//        /** @var Keyword $keyword */
//        $keyword = Keyword::findOne($keyword_id);
//
//        $req = new \SimbaRptAdgroupkeywordeffectGetRequest;
//        $req->setNick($keyword->nick);
//        $req->setCampaignId("".$keyword->campaign_id);
//        $req->setAdgroupId("".$keyword->adgroup_id);
//        $req->setStartTime("2016-10-27");
//        $req->setEndTime("2016-10-31");
//        $req->setSource("SUMMARY");
//        $req->setSubwayToken($keyword->store->authSign->subway_token);
//        $req->setPageNo("1");
//        $req->setPageSize("500");
//        $req->setSearchType("SEARCH");
//
//        $client=clone TopClient::getInstance();
//        $client->format="json";
//
//        $data=$client->execute($req,$keyword->store->session);
//        echo "<pre>";
//        print_r($data);


    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionLizd(){
        echo "lizd";
    }
}