<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "creative_effect".
 *
 * @property string $creativeId
 * @property string $date
 * @property integer $source
 * @property integer $indirectpay
 * @property integer $favShopCount
 * @property string $adgroupId
 * @property integer $searchtype
 * @property integer $favItemCount
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property string $nick
 * @property integer $carttotal
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $campaignId
 * @property integer $directpaycount
 * @property string $api_time
 */
class CreativeEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'creative_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['creativeId', 'date', 'source'], 'required'],
            [['creativeId', 'source', 'indirectpay', 'favShopCount', 'adgroupId', 'searchtype', 'favItemCount', 'indirectpaycount', 'indirectcarttotal', 'carttotal', 'directcarttotal', 'directpay', 'campaignId', 'directpaycount'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'creativeId' => 'Creative ID',
            'date' => 'Date',
            'source' => 'Source',
            'indirectpay' => 'Indirectpay',
            'favShopCount' => 'Fav Shop Count',
            'adgroupId' => 'Adgroup ID',
            'searchtype' => 'Searchtype',
            'favItemCount' => 'Fav Item Count',
            'indirectpaycount' => 'Indirectpaycount',
            'indirectcarttotal' => 'Indirectcarttotal',
            'nick' => 'Nick',
            'carttotal' => 'Carttotal',
            'directcarttotal' => 'Directcarttotal',
            'directpay' => 'Directpay',
            'campaignId' => 'Campaign ID',
            'directpaycount' => 'Directpaycount',
            'api_time' => 'Api Time',
        ];
    }
}
