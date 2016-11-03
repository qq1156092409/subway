<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscribe".
 *
 * @property string $nick
 * @property string $item_code
 * @property string $deadline
 * @property string $api_time
 */
class Subscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subscribe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick'], 'required'],
            [['deadline', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['item_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nick' => 'Nick',
            'item_code' => 'Item Code',
            'deadline' => 'Deadline',
            'api_time' => 'Api Time',
        ];
    }

    //--get
    public function getDeadlineLeft(){
        $end=strtotime($this->deadline);
        $left=($end-time())/(24*3600);
        if($left>=1){
            return (int)$left;
        }elseif($left<0){
            return 0;
        }else{
            return round($left,2);
        }
    }
    /**
     * 是否过期
     * @return bool
     */
    public function getIsPastDue(){
        return time()>strtotime($this->deadline);
    }
    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }
}
