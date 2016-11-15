<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keyword_effect".
 *
 * @property string $keywordid
 * @property string $date
 * @property integer $source
 * @property integer $indirectpay
 * @property integer $favShopCount
 * @property string $adgroupid
 * @property integer $searchtype
 * @property integer $favItemCount
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property string $nick
 * @property integer $carttotal
 * @property string $keywordstr
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $campaignid
 * @property integer $directpaycount
 * @property string $api_time
 */
class KeywordEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keyword_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keywordid', 'date', 'source'], 'required'],
            [['keywordid', 'source', 'indirectpay', 'favShopCount', 'adgroupid', 'searchtype', 'favItemCount', 'indirectpaycount', 'indirectcarttotal', 'carttotal', 'directcarttotal', 'directpay', 'campaignid', 'directpaycount'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['nick', 'keywordstr'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keywordid' => 'Keywordid',
            'date' => 'Date',
            'source' => 'Source',
            'indirectpay' => 'Indirectpay',
            'favShopCount' => 'Favshopcount',
            'adgroupid' => 'Adgroupid',
            'searchtype' => 'Searchtype',
            'favItemCount' => 'Favitemcount',
            'indirectpaycount' => 'Indirectpaycount',
            'indirectcarttotal' => 'Indirectcarttotal',
            'nick' => 'Nick',
            'carttotal' => 'Carttotal',
            'keywordstr' => 'Keywordstr',
            'directcarttotal' => 'Directcarttotal',
            'directpay' => 'Directpay',
            'campaignid' => 'Campaignid',
            'directpaycount' => 'Directpaycount',
            'api_time' => 'Api Time',
        ];
    }
}
