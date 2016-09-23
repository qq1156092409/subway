<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adgroup".
 *
 * @property integer $adgroup_id
 * @property string $nick
 * @property integer $campaign_id
 * @property string $category_ids
 * @property integer $num_iid
 * @property integer $default_price
 * @property integer $nosearch_max_price
 * @property string $is_nonsearch_default_price
 * @property string $online_status
 * @property string $offline_type
 * @property string $reason
 * @property string $create_time
 * @property string $modified_time
 * @property string $nonsearch_status
 * @property string $api_time
 */
class Adgroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adgroup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adgroup_id'], 'required'],
            [['adgroup_id', 'campaign_id', 'num_iid', 'default_price', 'nosearch_max_price'], 'integer'],
            [['is_nonsearch_default_price', 'online_status', 'offline_type'], 'string'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['category_ids'], 'string', 'max' => 128],
            [['reason', 'nonsearch_status'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adgroup_id' => 'Adgroup ID',
            'nick' => 'Nick',
            'campaign_id' => 'Campaign ID',
            'category_ids' => 'Category Ids',
            'num_iid' => 'Num Iid',
            'default_price' => 'Default Price',
            'nosearch_max_price' => 'Nosearch Max Price',
            'is_nonsearch_default_price' => 'Is Nonsearch Default Price',
            'online_status' => 'Online Status',
            'offline_type' => 'Offline Type',
            'reason' => 'Reason',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'nonsearch_status' => 'Nonsearch Status',
            'api_time' => 'Api Time',
        ];
    }
}
