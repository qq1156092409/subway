<?php

namespace app\controllers;

use app\models\Adgroup;
use app\models\execute\AdgroupExecute;
use app\models\form\AdgroupForm;
use app\models\KeywordBase;
use app\models\KeywordEffect;
use app\models\Ranking;
use yii\helpers\ArrayHelper;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

class AdgroupController extends Controller
{
    public $enableCsrfValidation=false;

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
    public function actionSmart($id){
        $adgroup = $this->getAdgroup($id);
        return $this->render("smart",[
            "adgroup"=>$adgroup,
        ]);
    }
    public function actionBulk($id){
        $adgroup = $this->getAdgroup($id);
        return $this->render("bulk",[
            "adgroup"=>$adgroup,
        ]);
    }

    public function actionKeywordReports($id,$source="summary",$start=null,$end=null){
        $start or $start=date("Y-m-d",strtotime("-7 day"));
        $end or $end=date("Y-m-d",strtotime("-1 day"));
        $adgroup = $this->getAdgroup($id);
        $bases=KeywordBase::find()->where([
            "adgroupid"=>$id,
        ])->andWhere(["between","date",$start,$end])->all();
        $effects=KeywordEffect::find()->where([
            "adgroupid"=>$id,
        ])->andWhere(["between","date",$start,$end])->all();
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return [$bases,$effects];
    }

    public function actionRefresh($id){
        $adgroup = $this->getAdgroup($id);
        $ret=["result"=>0];
        try{
            $execute=new AdgroupExecute($adgroup);
            $execute->refresh(false);
            $ret["result"]=1;
        }catch(\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionRefreshRankings($id){
        $adgroup = $this->getAdgroup($id);
        $ret=["result"=>0];
        try{
            $adgroup->refreshKeywordRankings();
            $keywords=$adgroup->keywords;
            $rankings=Ranking::findAll(["bidwordid"=>ArrayHelper::getColumn($keywords,"keyword_id")]);
            $ret["data"]=[
                "rankings"=>$rankings,
            ];
            $ret["result"]=1;
        }catch(\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionToggleStatus($id){
        $ret=["result"=>0];
        $model=new AdgroupForm();
        $model->scenario=AdgroupForm::TOGGLE_STATUS;
        $model->adgroup_id=$id;
        try{
            $flag=$model->toggleStatus();
            if(!$flag){
                foreach($model->errors as $error){
                    throw new BadRequestHttpException($error[0]);
                }
            }
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionBatchStatus(){
        $ret=["result"=>0];
        $model=new AdgroupForm();
        $model->scenario=AdgroupForm::BATCH_STATUS;
        $model->load(\Yii::$app->request->post(),"");
        $data=$model->batchStatus();
        if($data!==false){
            $ret["result"]=1;
            $ret["data"]=$data;
        }else{
            foreach($model->errors as $error){
                $ret["message"]=$error[0];break;
            }
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionDestroy($id){
        $ret=["result"=>0];
        $model=new AdgroupForm();
        $model->scenario=AdgroupForm::DESTROY;
        $model->adgroup_id=$id;
        try{
            $flag=$model->destroy();
            if(!$flag){
                foreach($model->errors as $error){
                    throw new BadRequestHttpException($error[0]);
                }
            }
            $ret["result"]=1;
            $ret["data"]=$id;
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionTestSearchCrowd($id){
        $ret=["result"=>0];
        $model=new AdgroupForm();
        $model->scenario=AdgroupForm::TEST_SEARCH_CROWD;
        $model->adgroup_id=$id;
        try{
            $ret["result"]=1;
            $ret["data"]=$model->testSearchCrowd();
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
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