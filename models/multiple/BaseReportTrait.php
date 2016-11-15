<?php
namespace app\models\multiple;

/**
 * Class BaseReportTrait
 * @package app\models\multiple
 * @property $impressions int
 * @property $click int
 * @property $aclick int
 * @property $cost int
 * @property $cpm int
 * @property $cpc int
 * @property $ctr int
 */
trait BaseReportTrait{
    /**
     * @param $bases BaseReportTrait[]
     * @return BaseReportTrait
     */
    public static function merge($bases){
        $totalBase=new self();
        $totalBase->impressions=$totalBase->click=$totalBase->aclick=$totalBase->cost=0;
        if($bases){
            foreach($bases as $base){
                $totalBase->impressions+=$base->impressions;
                $totalBase->click+=$base->click;
                $totalBase->aclick+=$base->aclick;
                $totalBase->cost+=$base->cost;
            }
        }
        return $totalBase->finishAttributes();
    }
    public function finishAttributes(){
        $this->cpm=round($this->impressions?$this->cost*1000/$this->impressions:0,2);
        $this->cpc=round($this->click?$this->cost/$this->click:0,2);
        $this->ctr=round($this->impressions?$this->click/$this->impressions:0,4);
        return $this;
    }

    public function costYuan(){
        return round($this->cost/100,2);
    }

    public function cpcYuan(){
        return round($this->cpc/100,2);
    }
}