<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keyword_base".
 *
 * @property string $keywordid
 * @property string $date
 * @property integer $click
 * @property string $cpm
 * @property integer $impressions
 * @property integer $adgroupid
 * @property string $searchtype
 * @property integer $avgpos
 * @property string $cost
 * @property string $nick
 * @property string $source
 * @property string $keywordstr
 * @property string $ctr
 * @property string $api_time
 */
class KeywordBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keyword_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keywordid', 'date'], 'required'],
            [['keywordid', 'click', 'impressions', 'adgroupid', 'avgpos'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['cpm', 'cost', 'ctr'], 'number'],
            [['searchtype', 'source'], 'string', 'max' => 16],
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
            'click' => 'Click',
            'cpm' => 'Cpm',
            'impressions' => 'Impressions',
            'adgroupid' => 'Adgroupid',
            'searchtype' => 'Searchtype',
            'avgpos' => 'Avgpos',
            'cost' => 'Cost',
            'nick' => 'Nick',
            'source' => 'Source',
            'keywordstr' => 'Keywordstr',
            'ctr' => 'Ctr',
            'api_time' => 'Api Time',
        ];
    }
}
