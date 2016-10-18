<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_real_time_report".
 *
 * @property string $campaignid
 * @property string $nick
 * @property integer $carttotal
 * @property integer $click
 * @property integer $cost
 * @property string $coverage
 * @property string $cpm
 * @property string $cpc
 * @property string $ctr
 * @property integer $directcarttotal
 * @property string $directtransaction
 * @property integer $directtransactionshipping
 * @property integer $favitemtotal
 * @property integer $favshoptotal
 * @property integer $favtotal
 * @property integer $impression
 * @property integer $indirectcarttotal
 * @property string $indirecttransaction
 * @property string $indirecttransactionshipping
 * @property integer $roi
 * @property integer $search_type
 * @property integer $source
 * @property string $thedate
 * @property integer $transactionshippingtotal
 * @property string $transactiontotal
 * @property string $api_time
 */
class CampaignRealTimeReport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_real_time_report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaignid', 'thedate'], 'required'],
            [['campaignid', 'carttotal', 'click', 'cost', 'directcarttotal', 'directtransactionshipping', 'favitemtotal', 'favshoptotal', 'favtotal', 'impression', 'indirectcarttotal', 'roi', 'search_type', 'source', 'transactionshippingtotal'], 'integer'],
            [['coverage', 'cpm', 'cpc', 'ctr', 'directtransaction', 'indirecttransaction', 'indirecttransactionshipping', 'transactiontotal'], 'number'],
            [['thedate', 'api_time'], 'safe'],
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
            'nick' => 'Nick',
            'carttotal' => 'Carttotal',
            'click' => 'Click',
            'cost' => 'Cost',
            'coverage' => 'Coverage',
            'cpm' => 'Cpm',
            'cpc' => 'Cpc',
            'ctr' => 'Ctr',
            'directcarttotal' => 'Directcarttotal',
            'directtransaction' => 'Directtransaction',
            'directtransactionshipping' => 'Directtransactionshipping',
            'favitemtotal' => 'Favitemtotal',
            'favshoptotal' => 'Favshoptotal',
            'favtotal' => 'Favtotal',
            'impression' => 'Impression',
            'indirectcarttotal' => 'Indirectcarttotal',
            'indirecttransaction' => 'Indirecttransaction',
            'indirecttransactionshipping' => 'Indirecttransactionshipping',
            'roi' => 'Roi',
            'search_type' => 'Search Type',
            'source' => 'Source',
            'thedate' => 'Thedate',
            'transactionshippingtotal' => 'Transactionshippingtotal',
            'transactiontotal' => 'Transactiontotal',
            'api_time' => 'Api Time',
        ];
    }

    public function calculate(){

    }
}
