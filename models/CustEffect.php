<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cust_effect".
 *
 * @property string $nick
 * @property string $date
 * @property integer $indirectpay
 * @property integer $favShopCount
 * @property integer $favItemCount
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property string $source
 * @property integer $carttotal
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $directpaycount
 * @property string $api_time
 */
class CustEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cust_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick', 'date'], 'required'],
            [['date', 'api_time'], 'safe'],
            [['indirectpay', 'favShopCount', 'favItemCount', 'indirectpaycount', 'indirectcarttotal', 'carttotal', 'directcarttotal', 'directpay', 'directpaycount'], 'integer'],
            [['nick'], 'string', 'max' => 64],
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
            'indirectpay' => 'Indirectpay',
            'favShopCount' => 'Favshopcount',
            'favItemCount' => 'Favitemcount',
            'indirectpaycount' => 'Indirectpaycount',
            'indirectcarttotal' => 'Indirectcarttotal',
            'source' => 'Source',
            'carttotal' => 'Carttotal',
            'directcarttotal' => 'Directcarttotal',
            'directpay' => 'Directpay',
            'directpaycount' => 'Directpaycount',
            'api_time' => 'Api Time',
        ];
    }

    //--method
    public function payTotalYuan(){
        return round($this->payTotal()/100, 2);
    }
    //--static
}
