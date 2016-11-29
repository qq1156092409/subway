<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crowd_type".
 *
 * @property integer $id
 * @property string $name
 * @property string $api_time
 */
class CrowdType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crowd_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['api_time'], 'safe'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'api_time' => 'Api Time',
        ];
    }
}
