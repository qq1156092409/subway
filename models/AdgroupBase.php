<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adgroup_base".
 *
 * @property string $adgroupId
 * @property string $date
 * @property string $source
 * @property string $cpm
 * @property integer $impressions
 * @property integer $campaignId
 * @property integer $searchtype
 * @property integer $avgpos
 * @property integer $click
 * @property string $cost
 * @property string $nick
 * @property string $ctr
 * @property string $api_time
 */
class AdgroupBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adgroup_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adgroupId', 'date', 'source'], 'required'],
            [['adgroupId', 'impressions', 'campaignId', 'searchtype', 'avgpos', 'click'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['cpm', 'cost', 'ctr'], 'number'],
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
            'cpm' => 'Cpm',
            'impressions' => 'Impressions',
            'campaignId' => 'Campaign ID',
            'searchtype' => 'Searchtype',
            'avgpos' => 'Avgpos',
            'click' => 'Click',
            'cost' => 'Cost',
            'nick' => 'Nick',
            'ctr' => 'Ctr',
            'api_time' => 'Api Time',
        ];
    }
}
