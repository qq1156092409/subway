<?php
namespace app\models\form;
use app\models\User;

class UserForm extends User
{
    const LOGIN = "login";

    public function scenarios(){
        return [
            self::LOGIN=>["username","password"]
        ];
    }
    public function rules(){
        $rules=[
            [["username","password"],"required"],
            ["username","checkExist"],
            ["password","checkPassword"],
        ];
        return array_merge(parent::rules(),$rules);
    }
    public function checkExist($attr){
        if(!$this->hasErrors()){
            if(!$this->getAr()){
                $this->addError($attr,"用户不存在");
            }
        }
    }
    public function checkPassword($attr){
        if(!$this->hasErrors()){
            $ar=$this->getAr();
            if(md5($this->password.md5($ar->salt))!=$ar->password){
                $this->addError($attr,"密码错误");
            }
        }
    }

    public function login(){
        if(!$this->validate()) return false;
        return \Yii::$app->user->login($this->getAr());
    }
    protected $_ar=false;

    /**
     * @return User
     */
    public function getAr(){
        if($this->_ar===false){
            $this->_ar=User::findOne(["username"=>$this->username]);
        }
        return $this->_ar;
    }
}