<?php
namespace app\models\multiple;
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/11/7
 * Time: 15:35
 */
class GlobalModel
{
    /**
     * @param $class string
     * @param $datas
     * @return int
     * @throws \yii\db\Exception
     */
    public static function batchInsert($class,$datas){
        $now=date("Y-m-d H:i:s");
        $columns=(new $class())->attributes();
        $count=0;
        if($datas){
            $rows=[];
            foreach($datas as $data){
                $temp=[];
                $data=(array)$data;
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }elseif(in_array($column,["favShopCount","favItemCount"])){
                        $a=null;
                        if(isset($data[$column])){
                            $a=$data[$column];
                        }else{
                            $a=$data[strtolower($column)];
                        }
                        $temp[]=$a;
                    }else{
                        $temp[]=isset($data[$column])?$data[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
//            echo "<pre>";print_r($rows);exit;
            $count+=\Yii::$app->db->createCommand()->batchInsert($class::tableName(),$columns,$rows)->execute();
        }
        return $count;
    }
}