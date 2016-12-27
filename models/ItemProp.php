<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_prop".
 *
 * @property integer $id
 * @property string $num_iid
 * @property string $prop_name_id
 * @property string $prop_value_id
 * @property string $api_time
 */
class ItemProp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_prop';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_iid', 'prop_name_id', 'prop_value_id'], 'integer'],
            [['api_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num_iid' => 'Num Iid',
            'prop_name_id' => 'Prop Name ID',
            'prop_value_id' => 'Prop Value ID',
            'api_time' => 'Api Time',
        ];
    }

    //--relation
    public function getPropName(){
        return $this->hasOne(PropName::className(),["id"=>"prop_name_id"]);
    }
    public function getPropValue(){
        return $this->hasOne(PropValue::className(),["id"=>"prop_value_id"]);
    }
}
