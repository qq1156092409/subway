<?php
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

    public function actionOptimizeOne($id){
        $this->doOptimize($this->getAdgroup($id));
    }
    protected function doOptimize($adgroup){
        $flag=false;
        ConsoleHelper::t("adgroup optimize one:".$adgroup->adgroup_id);
        $start=time();
        try{
            $execute=new AdgroupExecute($adgroup);
            $execute->optimize();
            $flag=true;
            ConsoleHelper::t("success");
        }catch (\Exception $e){
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time: ".(time()-$start));
        return $flag;
    }
    public function actionAddKeywordsOne($id){
        $this->doAddKeywords($this->getAdgroup($id));
    }
    protected function doAddKeywords($adgroup){
        $flag=false;
        ConsoleHelper::t("adgroup add keywords one:".$adgroup->adgroup_id);
        $start=time();
        try{
            $execute=new AdgroupExecute($adgroup);
            $execute->addKeywords();
            $flag=true;
            ConsoleHelper::t("success");
        }catch (\Exception $e){
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time: ".(time()-$start));
        return $flag;
    }

    protected function getAdgroup($id){
        $adgroup = Adgroup::findOne($id);
        if(!$adgroup){
            throw new \Exception("adgroup not found");
        }
        return $adgroup;
    }
}
