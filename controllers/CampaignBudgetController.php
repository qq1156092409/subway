<?php
namespace app\controllers;

use app\models\form\CampaignBudgetForm;
use yii\web\BadRequestHttpException;
use yii\web\Response;
use yii\web\Controller;

class CampaignBudgetController extends Controller
{
    public function actionEdit(){
        $ret=["result"=>0];
        $model=new CampaignBudgetForm();
        $model->scenario=CampaignBudgetForm::EDIT;
        $model->load(\Yii::$app->request->post(),"");
        try{
            if(!$model->edit()){
                $message="";
                foreach($model->errors as $errors){
                    $message=$errors[0];break;
                }
                throw new BadRequestHttpException($message);
            }
            $ret["result"]=1;
            $ret["data"]=$model->getAr();
        }catch(\Exception $e){
            $ret["message"]=$e->getMessage();
        }
        \Yii::$app->response->format=Response::FORMAT_JSON;
        return $ret;
    }
}