<?php

namespace app\models\execute;

use app\models\Campaign;

class CampaignExecute
{
    protected $_campaign;
    public function __construct($campaign){
        if($campaign instanceof Campaign){
            $this->_campaign=$campaign;
        }else{
            throw new \Exception("campaign not found");
        }
    }

    /**
     * 优化
     */
    public function optimize(){

    }
    //--validate
    protected function checkSetting(){
        return true;
    }
    protected function checkStore(){
        if(!$this->_campaign->store){
            throw new \Exception("store not found");
        }
    }
}