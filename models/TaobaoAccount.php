<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "taobaoAccount".
 *
 * @property integer $id
 * @property string $nick
 * @property string $username
 * @property string $password
 * @property string $appkey
 * @property string $secretKey
 * @property string $sessionKey
 * @property string $createTime
 */
class TaobaoAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'taobaoAccount';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['createTime'], 'safe'],
            [['nick', 'username', 'password', 'appkey', 'secretKey', 'sessionKey'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nick' => 'Nick',
            'username' => 'Username',
            'password' => 'Password',
            'appkey' => 'Appkey',
            'secretKey' => 'Secret Key',
            'sessionKey' => 'Session Key',
            'createTime' => 'Create Time',
        ];
    }
}
