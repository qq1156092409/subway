<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "crowd".
 *
 * @property integer $dim_id
 * @property integer $crowd_type_id
 * @property integer $option_group_id
 * @property integer $tag_id
 * @property string $tag_name
 * @property string $api_time
 */
class Crowd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'crowd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dim_id'], 'required'],
            [['dim_id', 'crowd_type_id', 'option_group_id', 'tag_id'], 'integer'],
            [['api_time'], 'safe'],
            [['tag_name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dim_id' => 'Dim ID',
            'crowd_type_id' => 'Crowd Type ID',
            'option_group_id' => 'Option Group ID',
            'tag_id' => 'Tag ID',
            'tag_name' => 'Tag Name',
            'api_time' => 'Api Time',
        ];
    }

    //--relation
    public function getCrowdType(){
        return $this->hasOne(CrowdType::className(),["id"=>"crowd_type_id"]);
    }
}
