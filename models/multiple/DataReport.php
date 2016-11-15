<?php

namespace app\models\multiple;
use app\models\CustBase;
use app\models\CustEffect;

/**
 * 数据报表整合
 * Class DataReport
 * @package app\models\multiple
 */
class DataReport
{
    /** @var CustBase */
    protected $_base;
    /** @var CustEffect  */
    protected $_effect;
    /**
     *
     * @param $base
     * @param $effect
     */
    public function __construct($base,$effect){
        $this->_base=$base;
        $this->_effect=$effect;
    }
    public function roi(){
        $pay=$this->_effect->payTotal();
        $cost=$this->_base->cost;
        if($cost){
            return round($pay/$cost,2);
        }
        return 0;
    }
    public function takeRate(){
        $payCount=$this->_effect->payCountTotal();
        $click=$this->_base->click;
        if($click){
            return round($payCount/$click,4);
        }
        return 0;
    }
}