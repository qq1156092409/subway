<?php

namespace app\controllers;
use app\models\Adgroup;
use app\models\Campaign;
use app\models\Item;
use app\models\Keyword;
use app\models\PropName;
use app\models\PropValue;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\Controller;

class TestController extends Controller {
    public function actionIndex(){
        /** @var Store $store */
        /** @var Campaign $campaign */
        /** @var Adgroup $adgroup */

//        $store = Store::findOne(20);
//        $campaign = Campaign::findOne(3792809);
        $adgroup = Adgroup::findOne(700328811);

        $adgroup->refreshKeywordScores();
    }
    public function actionQueueAdd(){
        $pheanstalk = new Pheanstalk('120.25.240.36');
        echo $pheanstalk->useTube('subway-store-refresh')->put(time());
    }
    public function actionDjq(){
        $id="520480060054";//zhanglucyy
//        $id="538142995213";//dusto
        /** @var Item $item */
        $item=Item::findOne($id);
        $data=$item->getCutTitle();
        print_r($data);exit;
        echo "title:".$item->title."<br>";
        foreach($item->itemProps as $prop){
            echo $prop->propName->name;
            echo "-";
            echo $prop->propValue->name;
            echo "<br>";
        }
        echo "<br>";
        $title="厂家 定制 棉 高档 圆领 卫衣 长袖 定制 广告 衫 外套 舞蹈表演 出 制服 印字";

        echo "<br>组合<br>";
        $a="广告衫/表演制服/卫衣定制/卫衣/制服/定制/班服" ;
        $b="厂家 棉 高档 圆领 长袖 外套 印字";
        $mains=explode("/",$a);
        $seconds=explode(" ",$b);
        $len=count($seconds);

        //0
        foreach($mains as $main){
            echo $main;
            echo "<br>";
        }
        //1
        for($i=0;$i<$len;$i++){
            foreach($mains as $main){
                echo $seconds[$i].$main;
                echo "<br>";
            }
        }
        //2
        for($i=0;$i<$len;$i++){
            for($j=0;$j<$len;$j++){
                if($i<$j){
                    foreach($mains as $main){
                        echo $seconds[$i].$seconds[$j].$main;
                        echo "<br>";
                    }
                }
            }
        }
        exit;



//        $propNames=PropName::find()->all();
//        foreach($propNames as $name){
//            echo $name->name."<br>";
//            $values=PropValue::find()->joinWith("itemProps")->where([
//                "item_prop.prop_name_id"=>$name->id,
//            ])->all();
//            echo Json::encode(ArrayHelper::getColumn($values,"name"));
//            echo "<br>";
//        }
    }

    public function actionIndex2(){
    }
}