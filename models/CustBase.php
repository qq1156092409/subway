<?php

namespace app\models;

use app\models\multiple\ReportInterface;
use app\models\multiple\BaseReportTrait;
use Yii;

/**
 * This is the model class for table "cust_base".
 *
 * @property integer $nick
 * @property string $date
 * @property string $cpm
 * @property integer $impressions
 * @property string $source
 * @property string $cpc
 * @property integer $aclick
 * @property integer $click
 * @property integer $cost
 * @property string $ctr
 * @property string $api_time
 */
class CustBase extends \yii\db\ActiveRecord implements ReportInterface
{
    use BaseReportTrait;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cust_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick', 'date'], 'required'],
            [['nick', 'impressions', 'aclick', 'click', 'cost'], 'integer'],
            [['date', 'api_time'], 'safe'],
            [['cpm', 'cpc', 'ctr'], 'number'],
            [['source'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nick' => 'Nick',
            'date' => 'Date',
            'cpm' => 'Cpm',
            'impressions' => 'Impressions',
            'source' => 'Source',
            'cpc' => 'Cpc',
            'aclick' => 'Aclick',
            'click' => 'Click',
            'cost' => 'Cost',
            'ctr' => 'Ctr',
            'api_time' => 'Api Time',
        ];
    }

    //--method
    //--static
}
