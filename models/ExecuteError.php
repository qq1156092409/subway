<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "execute_error".
 *
 * @property integer $id
 * @property string $key
 * @property string $message
 * @property string $create_time
 */
class ExecuteError extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'execute_error';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['key'], 'string', 'max' => 32],
            [['message'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'message' => 'Message',
            'create_time' => 'Create Time',
        ];
    }
}
