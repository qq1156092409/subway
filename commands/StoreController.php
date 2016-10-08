<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/9/29
 * Time: 19:24
 */

namespace app\commands;


use app\helpers\ConsoleHelper;
use app\models\execute\StoreExecute;
use app\models\Store;
use app\models\StoreError;
use yii\console\Controller;

class StoreController extends Controller{
    /**
     * 日常优化
     */
    public function actionOptimize(){
        $count=$error=$total=0;
        /** @var Store[] $stores */
        $stores = Store::find()->all();
        $total=count($stores);
        if($stores){
            foreach($stores as $k=>$store){
                if($k!=0){
                    sleep(1);
                }
                $flag=$this->doOptimize($store);
                if($flag){
                    $count++;
                }else{
                    $error++;
                }
            }
        }
        echo json_encode([
            "total"=>$total,
            "error"=>$error,
            "count"=>$count,
        ]);
    }

    /**
     * 单独日常优化
     * @param $id
     */
    public function actionOptimizeOne($id){
        $this->doOptimize($id);
    }

    protected function doOptimize($store){
        $flag=false;
        $start=time();
        echo "store-optimize-".$store->nick."\r\n";
        try{
            $execute=new StoreExecute($store);
            $execute->optimize();
            $flag=true;
            echo "success"."\r\n";
        }catch (\Exception $e){
            StoreError::log($store,$e);
            echo "error:".$e->getMessage()."\r\n";
        }
        unset($store);
        unset($execute);
        echo "time:".(time()-$start)."\r\n";
        return $flag;
    }

    /**
     * 下载店铺数据，初次添加
     * yii store/download
     */
    public function actionDownload(){
        $count=$error=$total=0;
        /** @var Store[] $stores */
        $stores = Store::find()->all();
        $total=count($stores);
        if($stores){
            foreach($stores as $k=>&$store){
                $flag=$this->doDownload($store);
                if($flag){
                    $count++;
                }else{
                    $error++;
                }
                unset($store);
                unset($stores[$k]);
            }
        }
        ConsoleHelper::t(json_encode([
            "total"=>$total,
            "error"=>$error,
            "count"=>$count,
        ]));
    }

    /**
     * 下载店铺数据，初次添加
     * yii store/download-one 7
     * @param $id
     */
    public function actionDownloadOne($id){
        $this->doDownload($id);
    }
    protected function doDownload($store){
        $flag=false;
        $start=time();
        try{
            $execute=new StoreExecute($store);
            $store2=$execute->getStore();
            echo "store-download-".$store2->id."\r\n";
            $execute->download();
            $flag=true;
            echo "success"."\r\n";
        }catch (\Exception $e){
            isset($store2) and StoreError::log($store2,$e);
            echo "error:".$e->getMessage()."\r\n";
        }
        echo "time:".(time()-$start)."\r\n";
        return $flag;
    }
}