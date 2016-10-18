<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/10/18
 * Time: 19:25
 */

namespace app\models\execute;


use app\models\Adgroup;
use app\models\KeywordPool;

class AdgroupExecute{
    /**
     * @var Adgroup
     */
    protected $_adgroup;
    public function __construct($adgroup){
        if(is_numeric($adgroup)){
            $this->_adgroup = Adgroup::findOne($adgroup);
        }elseif($adgroup instanceof Adgroup){
            $this->_adgroup=$adgroup;
        }
        if(!$this->_adgroup){
            throw new \Exception("adgroup not found");
        }
    }

    public function createKeywordPools(){
        $count=0;
        $adgroup=$this->_adgroup;
        $recommends=$adgroup->getRecommendKeywords();
        if($recommends){
            foreach($recommends as $recommend){
                $exist=KeywordPool::find()->where([
                    "adgroup_id"=>$adgroup->adgroup_id,
                    "word"=>$recommend["word"],
                ])->exists();
                if(!$exist){
                    $pool=new KeywordPool();
                    $pool->adgroup_id=$adgroup->adgroup_id;
                    $pool->word=$recommend["word"];
                    if(isset($recommend["average_price"]) && 100*$recommend["average_price"]){
                        $pool->price=100*$recommend["average_price"];
                    }
                    $pool->create_time=date("Y-m-d H:i:s");
                    if($pool->save()){
                        $count++;
                    }
                }
            }
        }
        return $count;
    }
}