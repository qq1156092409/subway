<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_budget".
 *
 * @property string $nick
 * @property integer $campaign_id
 * @property string $budget
 * @property string $create_time
 * @property string $modified_time
 * @property string $is_smooth
 * @property string $api_time
 */
class CampaignBudget extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_budget';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id'], 'integer'],
            [['budget'], 'number'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['is_smooth'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nick' => 'Nick',
            'campaign_id' => 'Campaign ID',
            'budget' => 'Budget',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'is_smooth' => 'Is Smooth',
            'api_time' => 'Api Time',
        ];
    }

    //--relation
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }

    //--method
    public function budgetYuan(){
        return (float)$this->budget;
    }
}
