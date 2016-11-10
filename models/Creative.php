<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "creative".
 *
 * @property string $creative_id
 * @property string $adgroup_id
 * @property string $audit_status
 * @property integer $campaign_id
 * @property string $create_time
 * @property string $img_url
 * @property string $modified_time
 * @property string $nick
 * @property string $title
 * @property string $api_time
 */
class Creative extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'creative';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['creative_id'], 'required'],
            [['creative_id', 'adgroup_id', 'campaign_id'], 'integer'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['audit_status'], 'string', 'max' => 16],
            [['img_url', 'title'], 'string', 'max' => 255],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'creative_id' => 'Creative ID',
            'adgroup_id' => 'Adgroup ID',
            'audit_status' => 'Audit Status',
            'campaign_id' => 'Campaign ID',
            'create_time' => 'Create Time',
            'img_url' => 'Img Url',
            'modified_time' => 'Modified Time',
            'nick' => 'Nick',
            'title' => 'Title',
            'api_time' => 'Api Time',
        ];
    }
}
