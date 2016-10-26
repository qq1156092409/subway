<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "__auth__session".
 *
 * @property integer $id
 * @property string $taobao_user_id
 * @property string $taobao_user_nick
 * @property string $sub_taobao_user_id
 * @property string $sub_taobao_user_nick
 * @property string $expires_in
 * @property string $token_type
 * @property string $r1_expires_in
 * @property string $r2_expires_in
 * @property string $w1_expires_in
 * @property string $w2_expires_in
 * @property string $access_token
 * @property string $refresh_token
 * @property string $re_expires_in
 * @property string $app_key
 * @property string $app_secret
 * @property string $create_time
 */
class AuthSession extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '__auth__session';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['taobao_user_id', 'sub_taobao_user_id', 'expires_in', 'r1_expires_in', 'r2_expires_in', 'w1_expires_in', 'w2_expires_in', 're_expires_in', 'app_key'], 'integer'],
            [['create_time'], 'safe'],
            [['taobao_user_nick', 'sub_taobao_user_nick', 'token_type'], 'string', 'max' => 50],
            [['access_token', 'refresh_token', 'app_secret'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'taobao_user_id' => 'Taobao User ID',
            'taobao_user_nick' => 'Taobao User Nick',
            'sub_taobao_user_id' => 'Sub Taobao User ID',
            'sub_taobao_user_nick' => 'Sub Taobao User Nick',
            'expires_in' => 'Expires In',
            'token_type' => 'Token Type',
            'r1_expires_in' => 'R1 Expires In',
            'r2_expires_in' => 'R2 Expires In',
            'w1_expires_in' => 'W1 Expires In',
            'w2_expires_in' => 'W2 Expires In',
            'access_token' => 'Access Token',
            'refresh_token' => 'Refresh Token',
            're_expires_in' => 'Re Expires In',
            'app_key' => 'App Key',
            'app_secret' => 'App Secret',
            'create_time' => 'Create Time',
        ];
    }
}
