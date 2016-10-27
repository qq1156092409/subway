<?php
namespace app\controllers;
use app\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AdminController extends Controller
{
    /**
     * 管理员切换到用户的身份进行操作
     * @param $userID
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionSudo($userID){
        /** @var User $user */
        $user=User::findOne($userID);
        if($user){
            \Yii::$app->user->login($user);
            return $this->goHome();
        }else{
            throw new NotFoundHttpException("user not found");
        }
    }
}