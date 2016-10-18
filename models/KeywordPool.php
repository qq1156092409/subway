<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keyword_pool".
 *
 * @property integer $id
 * @property integer $adgroup_id
 * @property string $word
 * @property integer $sort
 * @property integer $price
 * @property string $create_time
 */
class KeywordPool extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keyword_pool';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adgroup_id', 'sort', 'price'], 'integer'],
            [['create_time'], 'safe'],
            [['word'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'adgroup_id' => 'Adgroup ID',
            'word' => 'Word',
            'sort' => 'Sort',
            'price' => 'Price',
            'create_time' => 'Create Time',
        ];
    }

    //--relations
    public function getAdgroup(){
        return $this->hasOne(Adgroup::className(),["adgroup_id"=>"adgroup_id"]);
    }
}
