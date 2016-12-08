<?php

namespace app\commands;

use yii\console\Controller;

class SiteController extends Controller
{
    /**
     *
     */
    public function actionPull(){
        ignore_user_abort();
        $path=\Yii::$aliases["@app"];
        if($pos=strpos($path,":")){
            $pathArr=explode(":",$path);
            $cmd=$pathArr[0].": ; cd ".$pathArr[1]." ;";
        }else{
            $cmd="cd ".$path.";";
        }
        $cmd.="git pull;";
        exec($cmd,$output);
        print_r($output);
    }
}