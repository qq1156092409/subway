<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use Yii;

/**
 * This is the model class for table "campaign".
 *
 * @property integer $campaign_id
 * @property string $nick
 * @property string $title
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
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['nick', 'title'], 'string', 'max' => 64],
            [['settle_status', 'online_status'], 'string', 'max' => 16],
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
            'title' => 'Title',
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
    public function getCampaignSetting(){
        return $this->hasOne(CampaignSetting::className(),["campaign_id"=>"campaign_id"]);
    }

    //--refresh data
    public function refreshAdgroups(){
        $count=0;
        $pageSize="200";
        $req=new \SimbaAdgroupsbycampaignidGetRequest;
        $req->setNick($this->nick);
        $req->setPageSize($pageSize);
        $req->setCampaignId("".$this->campaign_id);
        $req->setPageNo("1");
        $response=TopClient::getInstance()->execute($req, $this->store->session);
//        echo "<pre>";print_r($response);exit;
        Adgroup::deleteAll(["campaign_id"=>$this->campaign_id]);

        $count+=$this->insertAdgroups($response->adgroups->adgroup_list->a_d_group);
        $totalPage=ceil($response->adgroups->total_item/$pageSize);
        if($totalPage>1){
            for($i=2;$i<=$totalPage;$i++){
                $req->setPageNo("".$i);
                $response=TopClient::getInstance()->execute($req, $this->store->session);
                $count+=$this->insertAdgroups($response->adgroups->adgroup_list->a_d_group);
            }
        }
        return $count;
    }
    protected function insertAdgroups($itemList){
        $now=date("Y-m-d H:i:s");
        $columns=(new Adgroup())->attributes();
        $rows=[];
        if($itemList){
            foreach($itemList as $itemOne){
                $itemOne=(array)$itemOne;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }elseif($column=="campaign_id"){
                        $temp[]=$this->campaign_id;
                    }else{
                        $temp[]=isset($itemOne[$column])?$itemOne[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
        return Yii::$app->db->createCommand()->batchInsert(Adgroup::tableName(),$columns,$rows)->execute();
    }
}
