<?php

namespace app\commands;


use app\helpers\ConsoleHelper;
use app\models\execute\StoreExecute;
use app\models\Store;
use app\models\StoreError;
use Pheanstalk\Pheanstalk;
use yii\base\Exception;
use yii\console\Controller;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;

class StoreController extends Controller{
    /**
     * 日常优化
     */
    public function actionOptimize(){
        $success=$total=0;
        /** @var Store[] $stores */
        $stores = Store::find()->all();
        $total=count($stores);
        if($stores){
            foreach($stores as $k=>&$store){
                $this->doOptimize($store) and $success++;
            }
        }
        echo Json::encode([
            "total"=>$total,
            "error"=>($total-$success),
            "success"=>$success,
        ]);
    }

    /**
     * 单独日常优化
     * @param $id
     */
    public function actionOptimizeOne($id){
        $this->doOptimize($this->getStore($id));
    }

    protected function doOptimize($store){
        $flag=false;
        $start=time();
        ConsoleHelper::t("store-optimize-".$store->id);
        try{
            $execute=new StoreExecute($store);
            $execute->optimize();
            $flag=true;
            ConsoleHelper::t("success");
        }catch (\Exception $e){
            StoreError::log($store,$e);
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time:".(time()-$start));
        return $flag;
    }

    /**
     * 下载店铺数据，初次添加
     * yii store/download
     */
    public function actionDownload(){
        $success=$total=0;
        while(1){
            /** @var Store[] $stores */
            $stores = Store::find()->joinWith("campaigns")->where("campaign.campaign_id is null")->limit(100)->all();
            if(!$stores){
                break;
            }
            $total+=count($stores);
            foreach($stores as $k=>&$store){
                unset($store->campaigns);
                $flag=$this->doDownload($store) and $success++;
                unset($store);
                unset($stores[$k]);
            }
        }
        ConsoleHelper::t(Json::encode([
            "total"=>$total,
            "error"=>($total-$success),
            "success"=>$success,
        ]));
    }

    /**
     * yii store/download-test
     */
    public function actionDownloadTest(){
        $success=$total=0;
        $nicks=["zhanglucyy","789linjie","dusto旗舰店"];
        $stores=Store::find()->where(["nick"=>$nicks])->all();
        $total=count($stores);
        foreach($stores as $k=>&$store){
            $this->doDownload($store) and $success++;
        }
        ConsoleHelper::t(Json::encode([
            "total"=>$total,
            "error"=>($total-$success),
            "success"=>$success,
        ]));
    }

    /**
     * 下载店铺数据，初次添加
     * yii store/download-one 7
     * @param $id
     */
    public function actionDownloadOne($id){
        $this->doDownload($this->getStore($id));
    }
    protected function doDownload($store){
        $flag=false;
        $start=time();
        try{
            $execute=new StoreExecute($store);
            ConsoleHelper::t("store-download-".$store->id);
            $execute->download();
            $flag=true;
            ConsoleHelper::t("success");
        }catch (\Exception $e){
            StoreError::log($store,$e);
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time:".(time()-$start));
        return $flag;
    }
    public function actionRefresh(){
        $success=$total=0;
        /** @var Store[] $stores */
        $stores = Store::find()->all();
        $total=count($stores);
        if($stores){
            foreach($stores as $k=>&$store){
                $this->doRefresh($store) and $success++;
                unset($store);
                unset($stores[$k]);
            }
        }
        ConsoleHelper::t(Json::encode([
            "total"=>$total,
            "error"=>($total-$success),
            "success"=>$success,
        ]));
    }

    /**
     * 执行
     * @param $id
     */
    public function actionRefreshOne($id){
        $this->doRefresh($this->getStore($id));
    }
    protected function doRefresh($store){
        $flag=false;
        $start=time();
        try{
            $execute=new StoreExecute($store);
            ConsoleHelper::t("store-refresh-".$store->id);
            $execute->refresh();
            $flag=true;
            ConsoleHelper::t("success");
        }catch (\Exception $e){
            StoreError::log($store,$e);
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time:".(time()-$start));
        return $flag;
    }

    /**
     * 添加到执行队列
     */
    public function actionRefreshPut(){
        $success=$total=0;
        $queue=new Pheanstalk("120.25.240.36");
        $queue->useTube("subway-store-refresh");
        $stores=Store::find()->select(["id"])->asArray(true)->orderBy("id")->all();
        if($stores){
            $total=count($stores);
            foreach($stores as $store){
                $queue->put($store["id"]) and $success++;
            }
        }
        ConsoleHelper::t(Json::encode([
            "total"=>$total,
            "success"=>$success,
        ]));
    }

    protected function getStore($id){
        $store = Store::findOne($id);
        if(!$store){
            throw new Exception("store not found");
        }
        return $store;
    }
}