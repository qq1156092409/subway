<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prop_name".
 *
 * @property string $id
 * @property string $name
 * @property string $api_time
 */
class PropName extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prop_name';
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
