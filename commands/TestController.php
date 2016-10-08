<?php

namespace app\commands;


use app\helpers\ConsoleHelper;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\console\Controller;

class TestController extends Controller {
    public function actionIndex(){
        $stores=Store::find()->all();
        foreach($stores as $store){
            /** @var Store $store */
            try{
                $store->refreshCustEffects();
            }catch (\Exception $e){
//                echo $e->getMessage();
                ConsoleHelper::t($store->id);
                ConsoleHelper::t(substr($e->getMessage(),0,64));
            }
        }

    }
    public function actionQueue(){
        $pheanstalk = new Pheanstalk('127.0.0.1');

        $job = $pheanstalk ->watch('testtube') ->ignore('default') ->reserve();
        $time=$job->getData();
        echo date("Y-m-d H:i:s",$time);
        $pheanstalk->delete($job);
    }

}