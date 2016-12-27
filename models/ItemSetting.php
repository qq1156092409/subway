<?php

namespace app\models;

use app\extensions\custom\qq\QcloudApi;
use Yii;
use yii\helpers\Json;

/**
 * This is the model class for table "item_setting".
 *
 * @property integer $id
 * @property string $item_id
 * @property string $title_analyse
 * @property string $ceil_word
 * @property string $create_time
 */
class ItemSetting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'item_id'], 'integer'],
            [['title_analyse', 'ceil_word'], 'string'],
            [['create_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'item_id' => 'Item ID',
            'title_analyse' => 'Title Analyse',
            'ceil_word' => 'Ceil Word',
            'create_time' => 'Create Time',
        ];
    }
    //--relation
    public function getItem(){
        return $this->hasOne(Item::className(),["num_id"=>"item_id"]);
    }
    //--get
    public function getActiveTitleAnalyse(){
        if(!$this->title_analyse){
            $wenzhi=QcloudApi::loadWenzhi();
            $data=$wenzhi->LexicalAnalysis(["text"=>$this->item->title,"code"=>2097152,"type"=>1]);
            $this->title_analyse=Json::encode($data);
            $this->save();
        }
        return $this->title_analyse;
    }
    public function getActiveCeilWord(){
        if(!$this->ceil_word){
            $word=["main"=>[],"decorate"=>[]];
            $data=Json::decode($this->getActiveTitleAnalyse());
            if($data){
                foreach($data as $one){
                    $word["decorate"][]=$one["word"];
                }
            }
            $item=$this->item;
            if($item->ItemProps){
                foreach($item->ItemProps as $prop){
                    $word["decorate"][]=$prop->propValue->name;
                }
            }
            $this->ceil_word=Json::encode($word);
            $this->save();
        }
        return $this->ceil_word;
    }
}
