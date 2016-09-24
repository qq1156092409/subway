<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ranking".
 *
 * @property string $bidwordid
 * @property integer $stat
 * @property integer $pr_rank
 * @property integer $mobile_rank
 * @property string $api_time
 */
class Ranking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ranking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bidwordid'], 'required'],
            [['bidwordid', 'stat', 'pr_rank', 'mobile_rank'], 'integer'],
            [['api_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bidwordid' => 'Bidwordid',
            'stat' => 'Stat',
            'pr_rank' => 'Pr Rank',
            'mobile_rank' => 'Mobile Rank',
            'api_time' => 'Api Time',
        ];
    }
}
