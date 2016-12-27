<?php

namespace app\models;

use app\extensions\custom\qq\QcloudApi;
use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "item".
 *
 * @property string $num_id
 * @property string $nick
 * @property string $price
 * @property string $title
 * @property string $publish_time
 * @property integer $quantity
 * @property integer $sales_count
 * @property string $api_time
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num_id'], 'required'],
            [['num_id', 'quantity', 'sales_count'], 'integer'],
            [['price'], 'number'],
            [['publish_time', 'api_time'], 'safe'],
            [['nick'], 'string', 'max' => 64],
            [['title'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num_id' => 'Num ID',
            'nick' => 'Nick',
            'price' => 'Price',
            'title' => 'Title',
            'publish_time' => 'Publish Time',
            'quantity' => 'Quantity',
            'sales_count' => 'Sales Count',
            'api_time' => 'Api Time',
        ];
    }

    //--relations
    public function getStore(){
        return $this->hasOne(Store::className(),["nick"=>"nick"]);
    }
    public function getItemDetail(){
        return $this->hasOne(ItemDetail::className(),["num_iid"=>"num_id"]);
    }
    public function getItemImgs(){
        return $this->hasMany(ItemImg::className(),["num_iid"=>"num_id"]);
    }
    public function getItemProps(){
        return $this->hasMany(ItemProp::className(),["num_iid"=>"num_id"]);
    }
    public function getItemSetting(){
        return $this->hasOne(ItemSetting::className(),["item_id"=>"num_id"]);
    }

    //--get
    public function getActiveSetting(){
        $setting=$this->itemSetting;
        if(!$setting){
            $setting=new ItemSetting();
            $setting->item_id=$this->num_id;
            $setting->create_time=date("Y-m-d H:i:s");
            $setting->save();
        }
        return $setting;
    }

    public function getTitleAnalyse(){
        $setting=$this->getActiveSetting();
        return $setting->getActiveTitleAnalyse();
    }
    public function getCutTitle(){
        $titleAnalyse=$this->getTitleAnalyse();
        $data=Json::decode($titleAnalyse);
        $ret=[];
        if(isset($data["tokens"])){
            foreach($data["tokens"] as $one){
                $ret[]=$one["word"];
            }
        }
        return $ret;
    }

}
