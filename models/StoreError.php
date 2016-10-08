<?php

namespace app\models;

use app\models\execute\StoreExecute;
use Yii;

/**
 * This is the model class for table "store_error".
 *
 * @property integer $id
 * @property integer $store_id
 * @property integer $execute_error_id
 * @property string $update_time
 */
class StoreError extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store_error';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['store_id', 'execute_error_id'], 'integer'],
            [['update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'store_id' => 'Store ID',
            'execute_error_id' => 'Execute Error ID',
            'update_time' => 'Update Time',
        ];
    }

    //--static
    /**
     * 记录错误日志
     * @param $store Store
     * @param $e \Exception
     * @return bool
     */
    public static function log($store,$e){
        $message=substr($e->getMessage(),0,255);
        $md5=md5($message);
        $error=ExecuteError::findOne(["key"=>$md5]);
        if(!$error){
            $error=new ExecuteError();
            $error->key=$md5;
            $error->message=$message;
            $error->create_time=date("Y-m-d H:i:s");
            $flag=$error->save();
            if(!$flag){
                print_r($error->errors);exit;
            }
        }
        $log=self::findOne(["store_id"=>$store->id,"execute_error_id"=>$error->id]);
        if(!$log){
            $log=new StoreError();
            $log->store_id=$store->id;
            $log->execute_error_id=$error->id;
        }
        $log->update_time=date("Y-m-d H:i:s");
        return $log->save();
    }
}
