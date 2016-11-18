<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_area".
 *
 * @property integer $campaign_id
 * @property string $nick
 * @property string $area
 * @property string $create_time
 * @property string $modified_time
 * @property string $api_time
 */
class CampaignArea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id'], 'required'],
            [['campaign_id'], 'integer'],
            [['area'], 'string'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
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
            'nick' => 'Nick',
            'area' => 'Area',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'api_time' => 'Api Time',
        ];
    }
}
