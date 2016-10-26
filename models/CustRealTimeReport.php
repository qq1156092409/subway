<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cust_real_time_report".
 *
 * @property string $nick
 * @property integer $carttotal
 * @property integer $click
 * @property integer $cost
 * @property string $cpc
 * @property string $cpm
 * @property string $ctr
 * @property string $coverage
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
 * @property string $roi
 * @property string $thedate
 * @property integer $transactionshippingtotal
 * @property string $transactiontotal
 * @property string $api_time
 */
class CustRealTimeReport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cust_real_time_report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick', 'thedate'], 'required'],
            [['carttotal', 'click', 'cost', 'directcarttotal', 'directtransactionshipping', 'favitemtotal', 'favshoptotal', 'favtotal', 'impression', 'indirectcarttotal', 'transactionshippingtotal'], 'integer'],
            [['cpc', 'cpm', 'ctr', 'coverage', 'directtransaction', 'indirecttransaction', 'indirecttransactionshipping', 'roi', 'transactiontotal'], 'number'],
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
            'nick' => 'Nick',
            'carttotal' => 'Carttotal',
            'click' => 'Click',
            'cost' => 'Cost',
            'cpc' => 'Cpc',
            'cpm' => 'Cpm',
            'ctr' => 'Ctr',
            'coverage' => 'Coverage',
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
            'thedate' => 'Thedate',
            'transactionshippingtotal' => 'Transactionshippingtotal',
            'transactiontotal' => 'Transactiontotal',
            'api_time' => 'Api Time',
        ];
    }

    /**
     * 计算其他属性
     */
    public function calculate(){

    }
}
