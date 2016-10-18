<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\helpers\ConsoleHelper;
use app\models\Adgroup;
use app\models\execute\AdgroupExecute;
use yii\console\Controller;
class AdgroupController extends Controller
{
    /**
     * yii adgroup/create-pools-one 718178392
     * @param $id
     */
    public function actionCreatePoolsOne($id){
        $this->doCreatePools($id);
    }
    public function actionCreatePools(){
        /** @var Adgroup[] $adgroups */
//        echo Adgroup::find()->joinWith("keywordPools")->where("keyword_pool.id is null")->count();exit;
        $adgroups=Adgroup::find()->joinWith("keywordPools")->where("keyword_pool.id is null")->all();
        if($adgroups){
            foreach($adgroups as $k=>&$adgroup){
                $this->doCreatePools($adgroup);
                unset($adgroup);
                unset($adgroups[$k]);
            }
        }
    }

    /**
     * @param $adgroup int|Adgroup
     */
    protected function doCreatePools($adgroup){
        ConsoleHelper::t("adgroup create pools one:".(is_numeric($adgroup)?$adgroup:$adgroup->adgroup_id));
        $start=time();
        try{
            $execute = new AdgroupExecute($adgroup);
            $count=$execute->createKeywordPools();
            ConsoleHelper::t("success:".$count);
        }catch (\Exception $e){
            ConsoleHelper::t("error: ".$e->getMessage());
        }
        $end=time();
        ConsoleHelper::t("time: ".($end-$start));
    }
}
