<?php

namespace app\extensions\custom\yii;

use yii\web\ServerErrorHttpException;

class ActiveRecord extends \yii\db\ActiveRecord
{
    protected $_entity=false;
    public function getEntity(){
        if($this->_entity===false){
            $this->_entity=self::findOne($this->primaryKey);
        }
        return $this->_entity;
    }
    public function setEntity($entity){
        $this->_entity=$entity;
        return $this;
    }

    public function checkEntity($attribute){
        if(!$this->hasErrors()){
            if(!$this->getEntity()){
                $this->addError($attribute,"entity not found.class:".static::className());
            }
        }
    }

    public function execute($validate=true){
        $scenario=$this->scenario;
        if($this->hasMethod($scenario)){
            throw new ServerErrorHttpException("has no method name:".$scenario);
        }
        return $this->$scenario($validate);
    }
}