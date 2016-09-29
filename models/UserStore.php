<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_store".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $store_id
 * @property integer $type
 * @property string $create_time
 */
class UserStore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'store_id', 'type'], 'integer'],
            [['create_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'store_id' => 'Store ID',
            'type' => 'Type',
            'create_time' => 'Create Time',
        ];
    }
}
