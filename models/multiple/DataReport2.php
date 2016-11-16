<?php
namespace app\models\multiple;
use app\models\CustBase;
use app\models\CustRealTimeReport;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * 统一报表
 * Class DataReport2
 * @package app\models\multiple
 */
class DataReport2 extends Model
{
    public $impression;
    public $click;
    public $cost;

    public $favitemcount;
    public $favshopcount;
    public $directcarttotal;
    public $indirectcarttotal;
    public $directpaycount;
    public $indirectpaycount;
    public $directpay;
    public $indirectpay;

    public $favtotal;
    public $carttotal;
    public $paycount;
    public $pay;

    public $ctr;
    public $cpc;
    public $cpm;
    public $roi;
    public $coverage;

    public function init(){
        $this->reset();
    }

    /**
     * @param $data array|CustRealTimeReport [base,effect]|realTime
     * @return $this
     */
    public function loadData($data){
        if(is_array($data)){
            $this->loadFromBaseEffect($data[0],$data[1]);
        }else{
            $this->loadFromRealTimeReport($data);
        }
        $this->calculate();
        return $this;
    }

    /**
     * @param $base CustBase
     * @param $effect
     */
    protected function loadFromBaseEffect($base,$effect){
        $attributes=ArrayHelper::merge($base->attributes,$effect->attributes);
        $this->loadFromAttributes($attributes);
        //fix other todo
        $this->impression=$base->impressions;
    }

    /**
     * @param $realTime CustRealTimeReport
     */
    protected function loadFromRealTimeReport($realTime){
        $this->loadFromAttributes($realTime->attributes);
        //fix other todo
        $this->directpaycount=$realTime->directtransactionshipping;
        $this->indirectpaycount=$realTime->indirecttransactionshipping;
    }
    protected function loadFromAttributes($attributes){
        $attributes2=[];
        if($attributes){
            foreach($attributes as $k=>$v){
                $attributes2[strtolower($k)]=$v;
            }
        }
        $this->load($attributes2,"");
    }
    public function calculate(){
        $this->favtotal=$this->favitemcount+$this->favshopcount;
        $this->carttotal=$this->indirectcarttotal=$this->directcarttotal;
        $this->paycount=$this->directpaycount+$this->indirectpaycount;
        $this->pay=$this->directpay+$this->indirectpay;

        $this->cpm=round($this->impression?$this->cost*1000/$this->impression:0,2);
        $this->cpc=round($this->click?$this->cost/$this->click:0,2);
        $this->ctr=round($this->impression?$this->click/$this->impression:0,4);
        $this->coverage=round($this->click?$this->paycount/$this->click:0,4);
    }

    /**
     * 合并
     * @param $reports
     */
    public static function merge($reports){
        $total=new static();
        $total->reset();
        if($reports){
            $attrs=$total->attributes();
            foreach($reports as $report){
                foreach($attrs as $attr){
                    $report->$attr and $total->$attr+=$report->$attr;
                }
            }
            $total->calculate();
        }
    }

    /**
     * 重设
     */
    public function reset(){
        $attrs=$this->attributes();
        if($attrs){
            foreach($attrs as $k){
                $this->$k=0;
            }
        }
    }
}