<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_img".
 *
 * @property string $num_iid
 * @property string $id
 * @property integer $position
 * @property string $url
 * @property string $api_time
 */
class ItemImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_iid', 'position'], 'required'],
            [['num_iid', 'id', 'position'], 'integer'],
            [['api_time'], 'safe'],
            [['url'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num_iid' => 'Num Iid',
            'id' => 'ID',
            'position' => 'Position',
            'url' => 'Url',
            'api_time' => 'Api Time',
        ];
    }
}
