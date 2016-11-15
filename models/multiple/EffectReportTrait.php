<?php
namespace app\models\multiple;
use app\models\CustBase;

/**
 * Class EffectReportTrait
 * @package app\models\multiple
 * @property integer $indirectpay
 * @property integer $favItemCount
 * @property integer $favitemcount
 * @property integer $searchtype
 * @property integer $indirectpaycount
 * @property integer $indirectcarttotal
 * @property integer $favShopCount
 * @property integer $favshopcount
 * @property integer $carttotal
 * @property integer $directcarttotal
 * @property integer $directpay
 * @property integer $directpaycount
 */
trait EffectReportTrait
{
    public static function merge($effects){
        $total=new self();
        $total->indirectpay=0;
        if($total->hasProperty("favshopcount")){
            $total->favshopcount=0;
        }elseif($total->hasProperty("favShopCount")){
            $total->favShopCount=0;
        }
        if($total->hasProperty("favitemcount")){
            $total->favitemcount=0;
        }elseif($total->hasProperty("favItemCount")){
            $total->favItemCount=0;
        }
        $total->indirectpaycount=0;
        $total->indirectcarttotal=0;
        $total->carttotal=0;
        $total->directcarttotal=0;
        $total->directpay=0;
        $total->directpaycount=0;
        if($effects){
            foreach($effects as $effect){
                $total->indirectpay+=$effect->indirectpay;
                if($total->hasProperty("favshopcount")){
                    $total->favshopcount+=$effect->favshopcount;
                }elseif($total->hasProperty("favShopCount")){
                    $total->favShopCount+=$effect->favShopCount;
                }
                if($total->hasProperty("favitemcount")){
                    $total->favitemcount+=$effect->favitemcount;
                }elseif($total->hasProperty("favItemCount")){
                    $total->favItemCount+=$effect->favItemCount;
                }
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
}