<?php

namespace app\controllers;


use app\models\form\SearchCrowdForm;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

class SearchCrowdController extends Controller
{
    public $enableCsrfValidation=false;

    public function actionBatchAdd(){
        $ret=["result"=>0];
        $model=new SearchCrowdForm();
        $model->scenario=SearchCrowdForm::BATCH_ADD;
        $model->load(\Yii::$app->request->post(),"");
        try{
            $flag=$model->batchAdd();
            if(!$flag){
                $message="";
                foreach($model->errors as $errors){
                    $message=$errors[0];break;
                }
                throw new BadRequestHttpException($message);
            }
            $ret["result"]=1;
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionBatchState(){
        $ret=["result"=>0];
        $model=new SearchCrowdForm();
        $model->scenario=SearchCrowdForm::BATCH_STATE;
        $model->load(\Yii::$app->request->post(),"");
        try{
            $flag=$model->batchState();
            if(!$flag){
                $message="";
                foreach($model->errors as $errors){
                    $message=$errors[0];break;
                }
                throw new BadRequestHttpException($message);
            }
            $ret["result"]=1;
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionBatchDiscount(){
        $ret=["result"=>0];
        $model=new SearchCrowdForm();
        $model->scenario=SearchCrowdForm::BATCH_STATE;
        $model->load(\Yii::$app->request->post(),"");
        try{
            $flag=$model->batchDiscount();
            if(!$flag){
                $message="";
                foreach($model->errors as $errors){
                    $message=$errors[0];break;
                }
                throw new BadRequestHttpException($message);
            }
            $ret["result"]=1;
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

    public function actionBatchDestroy(){
        $ret=["result"=>0];
        $model=new SearchCrowdForm();
        $model->scenario=SearchCrowdForm::BATCH_STATE;
        $model->load(\Yii::$app->request->post(),"");
        try{
            $flag=$model->batchDestroy();
            if(!$flag){
                $message="";
                foreach($model->errors as $errors){
                    $message=$errors[0];break;
                }
                throw new BadRequestHttpException($message);
            }
            $ret["result"]=1;
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }

}