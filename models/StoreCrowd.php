<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "store_crowd".
 *
 * @property string $nick
 * @property integer $dim_id
 * @property string $api_time
 */
class StoreCrowd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store_crowd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick', 'dim_id'], 'required'],
            [['dim_id'], 'integer'],
            [['api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nick' => 'Nick',
            'dim_id' => 'Dim ID',
            'api_time' => 'Api Time',
        ];
    }
}
