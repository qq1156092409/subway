<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_detail".
 *
 * @property string $num_iid
 * @property integer $cid
 * @property string $api_time
 */
class ItemDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_iid'], 'required'],
            [['num_iid', 'cid'], 'integer'],
            [['api_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num_iid' => 'Num Iid',
            'cid' => 'Cid',
            'api_time' => 'Api Time',
        ];
    }
}
