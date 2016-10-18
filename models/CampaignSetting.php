<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_setting".
 *
 * @property integer $id
 * @property integer $campaign_id
 * @property integer $status
 * @property string $create_time
 */
class CampaignSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id', 'status'], 'integer'],
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
            'campaign_id' => 'Campaign ID',
            'status' => 'Status',
            'create_time' => 'Create Time',
        ];
    }

    const STOP=0;
    const START=1;
}
