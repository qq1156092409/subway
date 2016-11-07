<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "creative_base".
 *
 * @property string $creativeId
 * @property string $date
 * @property string $source
 * @property string $cpm
 * @property integer $impressions
 * @property integer $campaignId
 * @property integer $searchtype
 * @property integer $avgpos
 * @property string $adgroupId
 * @property integer $click
 * @property integer $cost
 * @property string $nick
 * @property string $cpc
 * @property string $ctr
 * @property string $api_time
 */
class CreativeBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'creative_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['creativeId', 'date', 'source'], 'required'],
            [['creativeId', 'impressions', 'campaignId', 'searchtype', 'avgpos', 'adgroupId', 'click', 'cost'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['cpm', 'cpc', 'ctr'], 'number'],
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
            'creativeId' => 'Creative ID',
            'date' => 'Date',
            'source' => 'Source',
            'cpm' => 'Cpm',
            'impressions' => 'Impressions',
            'campaignId' => 'Campaign ID',
            'searchtype' => 'Searchtype',
            'avgpos' => 'Avgpos',
            'adgroupId' => 'Adgroup ID',
            'click' => 'Click',
            'cost' => 'Cost',
            'nick' => 'Nick',
            'cpc' => 'Cpc',
            'ctr' => 'Ctr',
            'api_time' => 'Api Time',
        ];
    }
}
