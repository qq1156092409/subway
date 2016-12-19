<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crowd_tag".
 *
 * @property string $nick
 * @property integer $dim_id
 * @property string $tag_id
 * @property string $api_time
 */
class CrowdTag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crowd_tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nick', 'dim_id'], 'required'],
            [['dim_id', 'tag_id'], 'integer'],
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
            'tag_id' => 'Tag ID',
            'api_time' => 'Api Time',
        ];
    }
}
