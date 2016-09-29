<?php

namespace app\models\execute;


use app\models\Category;

class CategoryExecute{
    public static function refreshCategories(){
        $i=1;
        while(true){
            $count=Category::refreshByLevel($i);
            if($count){
                $i++;
            }else{
                break;
            }
        }
        return $i;
    }
}