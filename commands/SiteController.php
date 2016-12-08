<?php

namespace app\commands;

use yii\console\Controller;

class SiteController extends Controller
{
    /**
     *
     */
    public function actionPull(){
        $cmd="cd ".(\Yii::$aliases["app"]).";git pull";
        exec($cmd);
    }
}