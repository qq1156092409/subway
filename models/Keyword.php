<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keyword".
 *
 * @property string $keyword_id
 * @property string $nick
 * @property integer $campaign_id
 * @property string $adgroup_id
 * @property string $word
 * @property integer $max_price
 * @property integer $is_default_price
 * @property string $audit_status
 * @property string $audit_desc
 * @property integer $is_garbage
 * @property string $create_time
 * @property string $modified_time
 * @property integer $qscore
 * @property string $match_scope
 * @property integer $mobile_is_default_price
 * @property integer $max_mobile_price
 * @property string $api_time
 */
class Keyword extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keyword';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword_id'], 'required'],
            [['keyword_id', 'campaign_id', 'adgroup_id', 'max_price', 'is_default_price', 'is_garbage', 'qscore', 'mobile_is_default_price', 'max_mobile_price'], 'integer'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['nick', 'word'], 'string', 'max' => 64],
            [['audit_status'], 'string', 'max' => 16],
            [['audit_desc', 'match_scope'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keyword_id' => 'Keyword ID',
            'nick' => 'Nick',
            'campaign_id' => 'Campaign ID',
            'adgroup_id' => 'Adgroup ID',
            'word' => 'Word',
            'max_price' => 'Max Price',
            'is_default_price' => 'Is Default Price',
            'audit_status' => 'Audit Status',
            'audit_desc' => 'Audit Desc',
            'is_garbage' => 'Is Garbage',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'qscore' => 'Qscore',
            'match_scope' => 'Match Scope',
            'mobile_is_default_price' => 'Mobile Is Default Price',
            'max_mobile_price' => 'Max Mobile Price',
            'api_time' => 'Api Time',
        ];
    }

    //--relations
    public function getAdgroup(){
        return $this->hasOne(Adgroup::className(),["adgroup_id"=>"adgroup_id"]);
    }
    public function getCampaign(){
        return $this->hasOne(Campaign::className(),["campaign_id"=>"campaign_id"]);
    }
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }

}
