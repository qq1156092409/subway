<?php
namespace app\models\multiple;
use app\models\CustBase;
use app\models\CustEffect;

/**
 * Class EffectReportTrait
 * @package app\models\multiple
 *
 * @property integer $indirectpay
 * @property integer $favItemCount
 * @property integer $searchtype
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property integer $favShopCount
 * @property integer $carttotal
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $directpaycount
 */
trait EffectReportTrait
{
    public static function merge($effects){
        /** @var CustEffect $total */
        $total=new self();
        $total->indirectpay=0;
        $total->favShopCount=0;
        $total->favItemCount=0;
        $total->indirectpaycount=0;
        $total->indirectcarttotal=0;
        $total->carttotal=0;
        $total->directcarttotal=0;
        $total->directpay=0;
        $total->directpaycount=0;
        if($effects){
            foreach($effects as $effect){
                $total->indirectpay+=$effect->indirectpay;
                $total->favShopCount+=$effect->favShopCount;
                $total->favItemCount+=$effect->favItemCount;
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
    public function finishAttributes(){

    }
    public function payTotal(){
        return $this->directpay+$this->indirectpay;
    }
    public function payTotalYuan(){
        return $this->payTotal()/100;
    }
    public function payCountTotal(){
        return $this->directpaycount+$this->indirectpaycount;
    }
    public function favTotal(){
        return $this->favShopCount+$this->favItemCount;
    }
}