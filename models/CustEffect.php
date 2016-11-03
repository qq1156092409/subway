<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cust_effect".
 *
 * @property string $nick
 * @property string $date
 * @property integer $indirectpay
 * @property integer $favshopcount
 * @property integer $favitemcount
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
            [['indirectpay', 'favshopcount', 'favitemcount', 'indirectpaycount', 'indirectcarttotal', 'carttotal', 'directcarttotal', 'directpay', 'directpaycount'], 'integer'],
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
            'favshopcount' => 'Favshopcount',
            'favitemcount' => 'Favitemcount',
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
    public function getPayTotalYuan(){
        return round(($this->directpay + $this->indirectpay)/100, 2);
    }
    public function getFavTotal(){
        return $this->favitemcount+$this->favshopcount;
    }
    public function getPayCountTotal(){
        return $this->indirectpaycount+$this->directpaycount;
    }
    //--static
    public static function merge($effects){
        $total=new self();
        if($effects){
            foreach($effects as $effect){
                $total->indirectpay+=$effect->indirectpay;
                $total->favshopcount+=$effect->favshopcount;
                $total->favitemcount+=$effect->favitemcount;
                $total->indirectpaycount+=$effect->indirectpaycount;
                $total->indirectcarttotal+=$effect->indirectcarttotal;
                $total->carttotal+=$effect->carttotal;
                $total->directcarttotal+=$effect->directcarttotal;
                $total->directpay+=$effect->directpay;
                $total->directpaycount+=$effect->directpaycount;
            }
        }
        return $total;
    }
}
