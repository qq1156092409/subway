<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $num_id
 * @property string $nick
 * @property integer $price
 * @property string $title
 * @property string $publish_time
 * @property integer $quantity
 * @property integer $sales_count
 * @property string $api_time
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_id'], 'required'],
            [['num_id', 'price', 'quantity', 'sales_count'], 'integer'],
            [['publish_time', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num_id' => 'Num ID',
            'nick' => 'Nick',
            'price' => 'Price',
            'title' => 'Title',
            'publish_time' => 'Publish Time',
            'quantity' => 'Quantity',
            'sales_count' => 'Sales Count',
            'api_time' => 'Api Time',
        ];
    }

    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }
}
