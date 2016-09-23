<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use Yii;

/**
 * This is the model class for table "store".
 *
 * @property integer $id
 * @property string $nick
 * @property string $session
 * @property string $create_time
 */
class Store extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'store';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['session'], 'string', 'max' => 128],
            [['nick'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nick' => 'Nick',
            'session' => 'Session',
            'create_time' => 'Create Time',
        ];
    }

    //--relations
    public function getBalance(){
        return $this->hasOne(Balance::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getItems(){
        return $this->hasMany(Item::className(),["nick"=>"nick"])->inverseOf("store");
    }
    public function getCampaigns(){
        return $this->hasMany(Campaign::className(),["nick"=>"nick"])->inverseOf("store");
    }

    //--refresh data
    public function refreshBalance(){
        $req=new \SimbaAccountBalanceGetRequest();
        $req->setNick($this->nick);
        $response=TopClient::getInstance()->execute($req, $this->session);
        Balance::deleteAll(["nick"=>$this->nick]);
        $balance=new Balance();
        $balance->balance=100*$response->balance;
        $balance->nick=$this->nick;
        return $balance->save();
    }
    public function refreshItems(){
        $count=0;
        $pageSize=200;
        $req=new \SimbaAdgroupOnlineitemsvonGetRequest;
        $req->setNick($this->nick);
        $req->setPageSize($pageSize);
        $req->setPageNo(1);
        $response=TopClient::getInstance()->execute($req, $this->session);
        Item::deleteAll(["nick"=>$this->nick]);

        $count+=$this->insertItems($response->item_list);
        $totalPage=ceil($response->total_item/$pageSize);
        if($totalPage>1){
            for($i=2;$i<=$totalPage;$i++){
                $req->setPageNo($i);
                $response=TopClient::getInstance()->execute($req, $this->session);
                $count+=$this->insertItems($response->item_list);
            }
        }
        return $count;
    }
    protected function insertItems($itemList){
        $now=date("Y-m-d H:i:s");
        $columns=[
            'num_id',
            'nick',
            'price',
            'title',
            'publish_time',
            'quantity',
            'sales_count',
            'api_time',
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
    public function refreshCampaigns(){
        $req=new \SimbaCampaignsGetRequest;
        $req->setNick($this->nick);
        $response=TopClient::getInstance()->execute($req, $this->session);
        Campaign::deleteAll(["nick"=>$this->nick]);
        $now=date("Y-m-d H:i:s");
        $columns=[
            'campaign_id',
            'nick',
            'settle_status',
            'settle_reason',
            'create_time',
            'modified_time',
            'online_status',
            'api_time',
        ];
        $rows=[];
        if($response->campaigns){
            foreach($response->campaigns as $campaignObj){
                $rows[]=[
                    $campaignObj->campaign_id,
                    $this->nick,
                    $campaignObj->settle_status,
                    $campaignObj->settle_reason,
                    $campaignObj->create_time,
                    $campaignObj->modified_time,
                    $campaignObj->online_status,
                    $now,
                ];
            }
        }
        return Yii::$app->db->createCommand()->batchInsert(Item::tableName(),$columns,$rows)->execute();
    }
}
