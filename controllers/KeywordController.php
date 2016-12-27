<?php
namespace app\controllers;

use app\models\form\KeywordForm;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\Response;

class KeywordController extends Controller
{
    public $enableCsrfValidation=false;
    public function actionBatchDestroy(){
        $ret=["result"=>0];
        $model=new KeywordForm();
        $model->scenario=KeywordForm::BATCH_DESTROY;
        $model->load(\Yii::$app->request->post(),"");
        try{
            $count=$model->batchDestroy();
            if(!$count){
                foreach($model->errors as $errors){
                    throw new BadRequestHttpException($errors[0]);
                }
            }
            $ret["result"]=1;
            $ret["count"]=$count;
        }catch (\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }
}