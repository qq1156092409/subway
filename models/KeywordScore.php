<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keyword_score".
 *
 * @property integer $keyword_id
 * @property string $date
 * @property integer $click
 * @property string $api_time
 */
class KeywordScore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keyword_score';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword_id', 'date'], 'required'],
            [['keyword_id', 'click'], 'integer'],
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
            'click' => 'Click',
            'api_time' => 'Api Time',
        ];
    }
}
