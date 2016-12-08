<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "search_crowd".
 *
 * @property string $id
 * @property string $adgroup_id
 * @property integer $discount
 * @property integer $is_default_price
 * @property integer $online_status
 * @property integer $price_mode
 * @property integer $biz_type
 * @property string $crowd_id
 * @property string $cust_id
 * @property integer $fit_discount
 * @property string $name
 * @property integer $type
 * @property string $api_time
 */
class SearchCrowd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'search_crowd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'adgroup_id', 'discount', 'is_default_price', 'online_status', 'price_mode', 'biz_type', 'crowd_id', 'cust_id', 'fit_discount', 'type'], 'integer'],
            [['api_time'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adgroup_id' => 'Adgroup ID',
            'discount' => 'Discount',
            'is_default_price' => 'Is Default Price',
            'online_status' => 'Online Status',
            'price_mode' => 'Price Mode',
            'biz_type' => 'Biz Type',
            'crowd_id' => 'Crowd ID',
            'cust_id' => 'Cust ID',
            'fit_discount' => 'Fit Discount',
            'name' => 'Name',
            'type' => 'Type',
            'api_time' => 'Api Time',
        ];
    }
}