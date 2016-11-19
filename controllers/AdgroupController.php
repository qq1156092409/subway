<?php

namespace app\controllers;

use app\models\Adgroup;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AdgroupController extends Controller
{
    public $layout="main_adgroup";
    public function actionIndex($id){
        $adgroup = $this->getAdgroup($id);
    }
    public function actionKeywords($id){
        $adgroup = $this->getAdgroup($id);
    }
    public function actionKeywordSelect($id){
        $adgroup = $this->getAdgroup($id);
        return $this->render("keyword_select",[
            "adgroup"=>$adgroup,
        ]);
    }
    public function actionCreatives($id){
        $adgroup = $this->getAdgroup($id);
        return $this->render("creatives",[
            "adgroup"=>$adgroup,
            "creatives"=>$adgroup->creatives,
        ]);
    }
    public function actionItemTitle($id){
        $adgroup = $this->getAdgroup($id);
        return $this->render("item_title",[
            "adgroup"=>$adgroup,
        ]);
    }

    /**
     * @param $id
     * @return Adgroup
     * @throws NotFoundHttpException
     */
    protected function getAdgroup($id){
        $adgroup = Adgroup::findOne($id);
        if(!$adgroup){
            throw new NotFoundHttpException("adgroup not found");
        }
        $view=\Yii::$app->view;
        $view->params["store"]=$adgroup->store;
        $view->params["adgroup"]=$adgroup;
        return $adgroup;
    }
}