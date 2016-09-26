<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auth_sign".
 *
 * @property string $nick
 * @property string $subway_token
 * @property string $api_time
 */
class AuthSign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auth_sign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick'], 'required'],
            [['api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['subway_token'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nick' => 'Nick',
            'subway_token' => 'Subway Token',
            'api_time' => 'Api Time',
        ];
    }

    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }
}
