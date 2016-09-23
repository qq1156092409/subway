<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use Yii;

/**
 * This is the model class for table "campaign".
 *
 * @property integer $campaign_id
 * @property string $nick
 * @property string $settle_status
 * @property string $settle_reason
 * @property string $create_time
 * @property string $modified_time
 * @property string $online_status
 * @property string $api_time
 */
class Campaign extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id'], 'required'],
            [['campaign_id'], 'integer'],
            [['settle_status', 'online_status'], 'string'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['settle_reason'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campaign_id' => 'Campaign ID',
            'nick' => 'Nick',
            'settle_status' => 'Settle Status',
            'settle_reason' => 'Settle Reason',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'online_status' => 'Online Status',
            'api_time' => 'Api Time',
        ];
    }

    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }

    //--refresh data
    public function refreshAdgroups(){
        $count=0;
        $pageSize=200;
        $req=new \SimbaAdgroupsbycampaignidGetRequest;
        $req->setNick($this->nick);
        $req->setPageSize($pageSize);
        $req->setPageNo(1);
        $response=TopClient::getInstance()->execute($req, $this->store->session);
        Adgroup::deleteAll(["campaign_id"=>$this->campaign_id]);

        $count+=$this->insertAdgroups($response->adgroups->adgroup_list);
        $totalPage=ceil($response->adgroups->total_item/$pageSize);
        if($totalPage>1){
            for($i=2;$i<=$totalPage;$i++){
                $req->setPageNo($i);
                $response=TopClient::getInstance()->execute($req, $this->store->session);
                $count+=$this->insertAdgroups($response->adgroups->adgroup_list);
            }
        }
        return $count;
    }
    protected function insertAdgroups($itemList){
        $now=date("Y-m-d H:i:s");
        $columns=[
            'adgroup_id' => 'Adgroup ID',
            'nick' => 'Nick',
            'campaign_id' => 'Campaign ID',
            'category_ids' => 'Category Ids',
            'num_iid' => 'Num Iid',
            'default_price' => 'Default Price',
            'nosearch_max_price' => 'Nosearch Max Price',
            'is_nonsearch_default_price' => 'Is Nonsearch Default Price',
            'online_status' => 'Online Status',
            'offline_type' => 'Offline Type',
            'reason' => 'Reason',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'nonsearch_status' => 'Nonsearch Status',
            'api_time' => 'Api Time',
        ];
        $rows=[];
        if($itemList){
            foreach($itemList as $itemOne){
                $rows[]=[
                    $itemOne->num_id,
                    $this->nick,
                    $itemOne->price,
                    $itemOne->title,
                    $itemOne->extra_attributes->publish_time,
                    $itemOne->extra_attributes->quantity,
                    $itemOne->extra_attributes->sales_count,
                    $now,
                ];
            }
        }
        return Yii::$app->db->createCommand()->batchInsert(Item::tableName(),$columns,$rows)->execute();
    }
}
