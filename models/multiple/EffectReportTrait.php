<?php
namespace app\models\multiple;

trait EffectReportTrait
{
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
    public function finishAttributes(){

    }
}