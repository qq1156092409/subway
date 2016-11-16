<?php
namespace app\models\multiple;
use app\models\CustBase;
use app\models\CustRealTimeReport;
use yii\base\Model;
use yii\helpers\ArrayHelper;

/**
 * 统一报表
 * Class DataReport
 * @package app\models\multiple
 */
class DataReport extends Model
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
    public $paypaycount;//pay / paycount 	成交量单价

    public function init(){
        $this->reset();
    }

    /**
     * @param $data array|CustRealTimeReport|object [base,effect]|realTime
     * @return $this
     */
    public function loadData($data){
        if(is_array($data)){
            $this->loadFromBaseEffect($data[0],$data[1]);
        }else{
            $this->loadFromReport($data);
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
        //fix other
        $this->impression=$base->impressions;
    }

    /**
     * @param $realTime CustRealTimeReport|object
     */
    protected function loadFromReport($realTime){
        if(!$realTime){
            return;
        }
        $this->loadFromAttributes($realTime->attributes);
        //fix other
        $this->directpaycount=$realTime->directtransactionshipping;
        $this->indirectpaycount=$realTime->indirecttransactionshipping;
        $this->favitemcount=$realTime->favitemtotal;
        $this->favshopcount=$realTime->favshoptotal;
        $this->directpay=$realTime->directtransaction;
        $this->indirectpay=$realTime->indirecttransaction;
    }
    protected function loadFromAttributes($attributes){
        if($attributes){
            foreach($attributes as $k=>$v){
                $k2=strtolower($k);
                if($this->hasProperty($k2) && $v){
                    $this->$k2=$v;
                }
            }
        }
    }
    public function calculate(){
        $this->favtotal=$this->favitemcount+$this->favshopcount;
        $this->carttotal=$this->indirectcarttotal=$this->directcarttotal;
        $this->paycount=$this->directpaycount+$this->indirectpaycount;
        $this->pay=$this->directpay+$this->indirectpay;

        $this->cpm=round($this->impression?$this->cost*1000/$this->impression:0,2);
        $this->cpc=round($this->click?$this->cost/$this->click:0,0);
        $this->ctr=round($this->impression?$this->click/$this->impression:0,4);
        $this->coverage=round($this->click?$this->paycount/$this->click:0,4);
        $this->roi=round($this->cost?$this->pay/$this->cost:0,2);
        $this->paypaycount=round($this->paycount?$this->pay/$this->paycount:0,0);
    }

    /**
     * 合并
     * @param $reports
     * @return static
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
        return $total;
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
    public function costYuan(){
        return $this->cost/100;
    }
    public function payYuan(){
        return $this->pay/100;
    }
    public function cpcYuan(){
        return $this->cpc/100;
    }
    public function paypaycountYuan(){
        return $this->paypaycount/100;
    }
}