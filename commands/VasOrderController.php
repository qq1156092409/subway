<?php

namespace app\commands;

use app\helpers\ConsoleHelper;
use app\models\VasOrder;
use yii\console\Controller;

class VasOrderController extends Controller
{
    /**
     * yii vas-order/refresh
     */
    public function actionRefresh(){
        ConsoleHelper::t("vas-order refresh");
        $start=time();
        try{
            $count=VasOrder::refreshData();
            ConsoleHelper::t("success:".$count);
        }catch (\Exception $e){
            ConsoleHelper::t("error:".get_class($e).":".$e->getMessage());
        }
        ConsoleHelper::t("time:".(time()-$start));
    }
}