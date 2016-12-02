<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "keyword_score".
 *
 * @property string $keyword_id
 * @property string $ad_type
 * @property string $adgroup_id
 * @property integer $campaign_id
 * @property integer $catscore
 * @property integer $custscore
 * @property integer $cvrscore
 * @property integer $kwscore
 * @property integer $pc_left_flag
 * @property integer $plflag
 * @property integer $pscore
 * @property integer $qscore
 * @property integer $wireless_creativescore
 * @property integer $wireless_custscore
 * @property integer $wireless_cvrscore
 * @property integer $wireless_matchflag
 * @property integer $wireless_qscore
 * @property integer $wireless_relescore
 * @property string $word
 * @property string $api_time
 */
class KeywordScore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keyword_score';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keyword_id'], 'required'],
            [['keyword_id', 'adgroup_id', 'campaign_id', 'catscore', 'custscore', 'cvrscore', 'kwscore', 'pc_left_flag', 'plflag', 'pscore', 'qscore', 'wireless_creativescore', 'wireless_custscore', 'wireless_cvrscore', 'wireless_matchflag', 'wireless_qscore', 'wireless_relescore'], 'integer'],
            [['api_time'], 'safe'],
            [['ad_type'], 'string', 'max' => 16],
            [['word'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'keyword_id' => 'Keyword ID',
            'ad_type' => 'Ad Type',
            'adgroup_id' => 'Adgroup ID',
            'campaign_id' => 'Campaign ID',
            'catscore' => 'Catscore',
            'custscore' => 'Custscore',
            'cvrscore' => 'Cvrscore',
            'kwscore' => 'Kwscore',
            'pc_left_flag' => 'Pc Left Flag',
            'plflag' => 'Plflag',
            'pscore' => 'Pscore',
            'qscore' => 'Qscore',
            'wireless_creativescore' => 'Wireless Creativescore',
            'wireless_custscore' => 'Wireless Custscore',
            'wireless_cvrscore' => 'Wireless Cvrscore',
            'wireless_matchflag' => 'Wireless Matchflag',
            'wireless_qscore' => 'Wireless Qscore',
            'wireless_relescore' => 'Wireless Relescore',
            'word' => 'Word',
            'api_time' => 'Api Time',
        ];
    }
}
