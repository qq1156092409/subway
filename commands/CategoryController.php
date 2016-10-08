<?php

namespace app\commands;

use app\models\Category;
use app\models\execute\CategoryExecute;
use yii\console\Controller;

class CategoryController extends Controller
{
    public function actionRefresh(){
        $start=time();
        echo "category refresh"."\r\n";
        try{
            $count=CategoryExecute::refreshCategories();
            echo "success:".$count."\r\n";
        }catch (\Exception $e){
            echo "error:".$e->getMessage()."\r\n";
        }
        echo "time:".(time()-$start)."\r\n";
    }
    public function actionBuildTree(){
        $start=time();
        echo "category build tree"."\r\n";
        try{
            Category::buildTree();
            echo "success"."\r\n";
        }catch (\Exception $e){
            echo "error:".$e->getMessage()."\r\n";
        }
        echo "time:".(time()-$start)."\r\n";
    }
}