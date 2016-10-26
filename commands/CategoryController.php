<?php

namespace app\commands;

use app\helpers\ConsoleHelper;
use app\models\Category;
use app\models\execute\CategoryExecute;
use yii\console\Controller;

class CategoryController extends Controller
{
    public function actionRefresh(){
        ConsoleHelper::t("category refresh");
        $start=time();
        try{
            $count=CategoryExecute::refresh();
            ConsoleHelper::t("success:".$count);
        }catch (\Exception $e){
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time:".(time()-$start));
    }
    public function actionBuildTree(){
        ConsoleHelper::t("category build tree");
        $start=time();
        try{
            Category::buildTree();
            ConsoleHelper::t("success");
        }catch (\Exception $e){
            ConsoleHelper::t("error:".$e->getMessage());
        }
        ConsoleHelper::t("time:".(time()-$start));
    }
}