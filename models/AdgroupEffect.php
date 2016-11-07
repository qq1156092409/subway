<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adgroup_effect".
 *
 * @property string $adgroupId
 * @property string $date
 * @property string $source
 * @property integer $indirectpay
 * @property integer $favItemCount
 * @property integer $campaignId
 * @property integer $searchtype
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property string $nick
 * @property integer $favShopCount
 * @property integer $carttotal
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $directpaycount
 * @property string $api_time
 */
class AdgroupEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adgroup_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adgroupId', 'date', 'source'], 'required'],
            [['adgroupId', 'indirectpay', 'favItemCount', 'campaignId', 'searchtype', 'indirectpaycount', 'indirectcarttotal', 'favShopCount', 'carttotal', 'directcarttotal', 'directpay', 'directpaycount'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['source'], 'string', 'max' => 16],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adgroupId' => 'Adgroup ID',
            'date' => 'Date',
            'source' => 'Source',
            'indirectpay' => 'Indirectpay',
            'favItemCount' => 'Fav Item Count',
            'campaignId' => 'Campaign ID',
            'searchtype' => 'Searchtype',
            'indirectpaycount' => 'Indirectpaycount',
            'indirectcarttotal' => 'Indirectcarttotal',
            'nick' => 'Nick',
            'favShopCount' => 'Fav Shop Count',
            'carttotal' => 'Carttotal',
            'directcarttotal' => 'Directcarttotal',
            'directpay' => 'Directpay',
            'directpaycount' => 'Directpaycount',
            'api_time' => 'Api Time',
        ];
    }
}
