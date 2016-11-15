<?php

namespace app\models;

use app\models\multiple\BaseReportTrait;
use app\models\multiple\ReportInterface;
use Yii;

/**
 * This is the model class for table "campaign_base".
 *
 * @property string $nick
 * @property string $campaignid
 * @property string $date
 * @property string $cpm
 * @property integer $impressions
 * @property integer $searchtype
 * @property integer $avgpos
 * @property integer $click
 * @property integer $cost
 * @property integer $source
 * @property integer $aclick
 * @property string $ctr
 * @property string $cpc
 * @property string $api_time
 */
class CampaignBase extends \yii\db\ActiveRecord implements ReportInterface
{
    use BaseReportTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaignid', 'date'], 'required'],
            [['campaignid', 'impressions', 'searchtype', 'avgpos', 'click', 'cost', 'source', 'aclick'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['cpm', 'ctr', 'cpc'], 'number'],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nick' => 'Nick',
            'campaignid' => 'Campaignid',
            'date' => 'Date',
            'cpm' => 'Cpm',
            'impressions' => 'Impressions',
            'searchtype' => 'Searchtype',
            'avgpos' => 'Avgpos',
            'click' => 'Click',
            'cost' => 'Cost',
            'source' => 'Source',
            'aclick' => 'Aclick',
            'ctr' => 'Ctr',
            'cpc' => 'Cpc',
            'api_time' => 'Api Time',
        ];
    }
}
