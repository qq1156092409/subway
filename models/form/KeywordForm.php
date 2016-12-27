<?php

namespace app\models\form;

use app\extensions\custom\taobao\TopClient;
use app\models\Adgroup;
use app\models\Keyword;
use app\models\KeywordBase;
use app\models\KeywordEffect;
use app\models\KeywordScore;
use app\models\Ranking;
use yii\helpers\ArrayHelper;

class KeywordForm extends Keyword
{
    const BATCH_DESTROY="batchDestroy";
    const BATCH_PRICE="batchPrice";
    public $ids;
    public $datas;
    public function scenarios(){
        return [
            self::BATCH_DESTROY=>["ids"],
            self::BATCH_PRICE=>["datas"],
        ];
    }
    public function rules(){
        $before=[
            ["ids","processIds"],
        ];
        $rules=[
            [["ids","datas"],"required"],
            ["ids","checkIds"],
        ];
        return array_merge($before,parent::rules(),$rules);
    }
    public function processIds($attribute){
        if(!is_array($this->ids)){
            $this->ids=(array)$this->ids;
        }
    }
    public function checkIds($attribute){
        if(!$this->hasErrors()){
            $keywords=Keyword::findAll($this->ids);
            if(!$keywords){
                $this->addError($attribute,"keyword not found");return;
            }
            $adgroupIds=array_unique(ArrayHelper::getColumn($keywords,"adgroup_id"));
            if(count($adgroupIds)>1){
                $this->addError($attribute,"adgroup not unique");return;
            }
            $adgroup=Adgroup::findOne($adgroupIds[0]);
            if(!$adgroup){
                $this->addError($attribute,"adgroup not found");return;
            }
            $this->_keywordsAdgroup=$adgroup;
            //todo check user
        }
    }
    public function batchDestroy(){
        if(!$this->validate()){
            return false;
        }
        $adgroup=$this->_keywordsAdgroup;
        $ids=ArrayHelper::getColumn($this->getArs(),"keyword_id");
        $req = new \SimbaKeywordsDeleteRequest;
        $req->setNick("".$adgroup->nick);
        $req->setCampaignId("".$adgroup->campaign_id);
        $req->setKeywordIds(implode(",",ArrayHelper::getColumn($this->getArs(),"keyword_id")));
        $response=TopClient::getInstance()->execute($req,$adgroup->store->session);
        $count=Keyword::deleteAll(["keyword_id"=>$ids]);
        if($count){
            KeywordBase::deleteAll(["keywordid"=>$ids]);
            KeywordEffect::deleteAll(["keywordid"=>$ids]);
            KeywordScore::deleteAll(["keyword_id"=>$ids]);
            Ranking::deleteAll(["bidwordid"=>$ids]);
        }
        return $count;
    }
    protected $_ar=false;
    protected $_ars=false;

    /** @var  Adgroup */
    protected $_keywordsAdgroup;

    /**
     * @return Keyword
     */
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=Keyword::findOne($this->keyword_id);
        }
        return $this->_ar;
    }

    /**
     * @return Keyword[]
     */
    public function getArs(){
        if($this->_ars===false){
            $this->_ars=Keyword::findAll($this->ids);
        }
        return $this->_ars;
    }
}