<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_effect".
 *
 * @property string $campaignid
 * @property string $date
 * @property string $nick
 * @property integer $source
 * @property integer $indirectpay
 * @property integer $favItemCount
 * @property integer $searchtype
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property integer $favShopCount
 * @property integer $carttotal
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $directpaycount
 * @property string $api_time
 */
class CampaignEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaignid', 'date', 'source'], 'required'],
            [['campaignid', 'source', 'indirectpay', 'favItemCount', 'searchtype', 'indirectpaycount', 'indirectcarttotal', 'favShopCount', 'carttotal', 'directcarttotal', 'directpay', 'directpaycount'], 'integer'],
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
            'campaignid' => 'Campaignid',
            'date' => 'Date',
            'nick' => 'Nick',
            'source' => 'Source',
            'indirectpay' => 'Indirectpay',
            'favItemCount' => 'Fav Item Count',
            'searchtype' => 'Searchtype',
            'indirectpaycount' => 'Indirectpaycount',
            'indirectcarttotal' => 'Indirectcarttotal',
            'favShopCount' => 'Fav Shop Count',
            'carttotal' => 'Carttotal',
            'directcarttotal' => 'Directcarttotal',
            'directpay' => 'Directpay',
            'directpaycount' => 'Directpaycount',
            'api_time' => 'Api Time',
        ];
    }
}
