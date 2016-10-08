<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use yii\helpers\ArrayHelper;
use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $cat_id
 * @property integer $cat_level
 * @property string $cat_name
 * @property integer $cat_path_id
 * @property string $cat_path_name
 * @property string $last_sync_time
 * @property integer $parent_cat_id
 * @property string $api_time
 * @property integer $lft
 * @property integer $rgt
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cat_id'], 'required'],
            [['cat_id', 'cat_level', 'cat_path_id', 'parent_cat_id', 'lft', 'rgt'], 'integer'],
            [['last_sync_time', 'api_time'], 'safe'],
            [['cat_name'], 'string', 'max' => 64],
            [['cat_path_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'cat_level' => 'Cat Level',
            'cat_name' => 'Cat Name',
            'cat_path_id' => 'Cat Path ID',
            'cat_path_name' => 'Cat Path Name',
            'last_sync_time' => 'Last Sync Time',
            'parent_cat_id' => 'Parent Cat ID',
            'api_time' => 'Api Time',
            'lft' => 'Lft',
            'rgt' => 'Rgt',
        ];
    }

    //--relations
    public function getChildren(){
        return $this->hasMany(Category::className(),["parent_cat_id"=>"cat_id"]);
    }

    //--static
    protected static $buildCount=1;
    public static function buildTree(){
        $categories=Category::findAll(["cat_level"=>1]);
        if($categories){
            foreach($categories as $k=>&$category){//?
                self::buildOne($category);
                unset($categories[$k]);//
                unset($category);//
            }
        }
    }

    /**
     * @param $category Category
     */
    protected static function buildOne($category){
        $category->lft=self::$buildCount;
        self::$buildCount++;
        if($category->children){
            foreach($category->children as $one){
                self::buildOne($one);
            }
        }
        $category->rgt=self::$buildCount;
        self::$buildCount++;
        $category->save();
    }

    //--refresh data
    public static function refreshRoots(){
        $req = new \SimbaInsightCatsinfoGetRequest;
        $req->setType("0");
        $response=TopClient::getInstance()->execute($req);
//        echo "<pre>";print_r($response);exit;
        Category::deleteAll(["cat_level"=>1]);
        return self::insertCategories($response->category_info_list->insight_category_info_d_t_o);
    }
    protected static function insertCategories($categories){
        $now=date("Y-m-d H:i:s");
        $columns=(new Category())->attributes();
        $rows=[];
        if($categories){
            foreach($categories as $category){
                $category=(array)$category;
                $temp=[];
                foreach($columns as $column){
                    if($column=="api_time"){
                        $temp[]=$now;
                    }else{
                        $temp[]=isset($category[$column])?$category[$column]:null;
                    }
                }
                $rows[]=$temp;
            }
        }
        $rows = self::arrayUnique($rows);//去重
//        echo "<pre>";print_r($rows);exit;
        return Yii::$app->db->createCommand()->batchInsert(Category::tableName(),$columns,$rows)->execute();
    }
    protected static function arrayUnique($rows){
        $ids=[];
        if($rows){
            foreach($rows as $k=>$row){
                if(in_array($row[0],$ids)){
                    unset($rows[$k]);
                }else{
                    $ids[]=$row[0];
                }
            }
        }
        return array_values($rows);
    }

    public function refreshChildren(){
        $req = new \SimbaInsightCatsinfoGetRequest;
        $req->setType("2");
        $req->setCategoryIdList("".$this->cat_id);
        $response=TopClient::getInstance()->execute($req);
//        echo "<pre>";print_r($response);exit;
        Category::deleteAll(["parent_cat_id"=>$this->cat_id]);
        return self::insertCategories($response->category_info_list->insight_category_info_d_t_o);
    }
    public static function refreshByLevel($level){
        if($level==1){
            return self::refreshRoots();
        }
        $categories=Category::findAll(["cat_level"=>$level-1]);
        $ids=ArrayHelper::getColumn($categories,"cat_id");
        $count=0;
        if($ids){
            Category::deleteAll(["cat_level"=>$level]);
            $ids2 = array_chunk($ids, 20);
            $req = new \SimbaInsightCatsinfoGetRequest;
            $req->setType("2");
            foreach($ids2 as $chunk){
                $req->setCategoryIdList(implode(",",$chunk));
                $response=TopClient::getInstance()->execute($req);
                $count+=self::insertCategories($response->category_info_list->insight_category_info_d_t_o);
            }
        }
        return $count;
    }

}
