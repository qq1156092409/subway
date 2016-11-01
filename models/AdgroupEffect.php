<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adgroup_effect".
 *
 * @property integer $keyword_id
 * @property string $date
 * @property integer $directpay
 * @property string $api_time
 */
class AdgroupEffect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adgroup_effect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword_id', 'date'], 'required'],
            [['keyword_id', 'directpay'], 'integer'],
            [['date', 'api_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keyword_id' => 'Keyword ID',
            'date' => 'Date',
            'directpay' => 'Directpay',
            'api_time' => 'Api Time',
        ];
    }
}
