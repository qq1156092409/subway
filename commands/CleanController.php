<?php

namespace app\commands;

use app\helpers\ConsoleHelper;
use app\models\CampaignBase;
use app\models\CampaignEffect;
use app\models\CustBase;
use app\models\CustEffect;
use yii\console\Controller;

/**
 * 数据清理
 * Class CleanController
 * @package app\commands
 */
class CleanController extends Controller{
    /**
     * ./yii clean/db
     * 清理数据库
     */
    public function actionDb(){
        ConsoleHelper::t("clean db");
        $total=0;
        $start=time();
        //报表数据
        $end=date("Y-m-d",strtotime("-2 month"));
        $total+=CustBase::deleteAll("date < '".$end."'");
        $total+=CustEffect::deleteAll("date < '".$end."'");
        $total+=CampaignBase::deleteAll("date < '".$end."'");
        $total+=CampaignEffect::deleteAll("date < '".$end."'");
        //todo adgroup and keyword rpt
        ConsoleHelper::t("success:".$total);
        ConsoleHelper::t("time:".(time()-$start));
    }

    /**
     * 清理临时文件
     */
    public function actionTemp(){

    }
}