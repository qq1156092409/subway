<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use Yii;

/**
 * This is the model class for table "channel".
 *
 * @property integer $channel_id
 * @property string $name
 * @property string $traffic_type
 * @property string $traffic_name
 * @property string $is_search
 * @property string $is_nosearch
 * @property string $api_time
 */
class Channel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'channel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['channel_id'], 'required'],
            [['channel_id'], 'integer'],
            [['api_time'], 'safe'],
            [['name', 'traffic_type', 'traffic_name', 'is_search', 'is_nosearch'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'channel_id' => 'Channel ID',
            'name' => 'Name',
            'traffic_type' => 'Traffic Type',
            'traffic_name' => 'Traffic Name',
            'is_search' => 'Is Search',
            'is_nosearch' => 'Is Nosearch',
            'api_time' => 'Api Time',
        ];
    }

    //--static
    public static function refreshData(){
        //todo session invalid
        $store=Store::findOne(["nick"=>"zhanglucyy"]);
        $req = new \SimbaCampaignChanneloptionsGetRequest;
        $response=TopClient::getInstance()->execute($req,$store->session);
        echo "<pre>"; print_r($response);
    }
}
