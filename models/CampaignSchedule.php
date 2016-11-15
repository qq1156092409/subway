<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_schedule".
 *
 * @property integer $campaign_id
 * @property string $create_time
 * @property string $modified_time
 * @property string $nick
 * @property string $schedule
 * @property string $api_time
 */
class CampaignSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id'], 'required'],
            [['campaign_id'], 'integer'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['schedule'], 'string'],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campaign_id' => 'Campaign ID',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'nick' => 'Nick',
            'schedule' => 'Schedule',
            'api_time' => 'Api Time',
        ];
    }
}
