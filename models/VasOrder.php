<?php

namespace app\models;

use app\extensions\custom\taobao\TopClient;
use app\models\multiple\GlobalModel;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "vas_order".
 *
 * @property string $order_id
 * @property string $biz_order_id
 * @property string $activity_code
 * @property string $article_code
 * @property string $item_code
 * @property string $article_item_name
 * @property string $article_name
 * @property integer $biz_type
 * @property string $order_cycle_start
 * @property string $order_cycle_end
 * @property integer $fee
 * @property string $create
 * @property string $nick
 * @property string $order_cycle
 * @property integer $prom_fee
 * @property integer $refund_fee
 * @property integer $total_pay_fee
 * @property string $api_time
 */
class VasOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vas_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id'], 'required'],
            [['order_id', 'biz_order_id', 'biz_type', 'fee', 'prom_fee', 'refund_fee', 'total_pay_fee'], 'integer'],
            [['order_cycle_start', 'order_cycle_end', 'create', 'api_time'], 'safe'],
            [['activity_code', 'nick'], 'string', 'max' => 64],
            [['article_code', 'item_code', 'article_item_name', 'article_name'], 'string', 'max' => 32],
            [['order_cycle'], 'string', 'max' => 16],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'biz_order_id' => 'Biz Order ID',
            'activity_code' => 'Activity Code',
            'article_code' => 'Article Code',
            'item_code' => 'Item Code',
            'article_item_name' => 'Article Item Name',
            'article_name' => 'Article Name',
            'biz_type' => 'Biz Type',
            'order_cycle_start' => 'Order Cycle Start',
            'order_cycle_end' => 'Order Cycle End',
            'fee' => 'Fee',
            'create' => 'Create',
            'nick' => 'Nick',
            'order_cycle' => 'Order Cycle',
            'prom_fee' => 'Prom Fee',
            'refund_fee' => 'Refund Fee',
            'total_pay_fee' => 'Total Pay Fee',
            'api_time' => 'Api Time',
        ];
    }

    public static function refreshData(){
        $count=0;
        $pageNo=1;
        $pageSize=200;
        $req = new \VasOrderSearchRequest();
        $req->setArticleCode(TopClient::ARTICLE_CODE);
        $req->setPageSize("" . $pageSize);
        $req->setStartCreated(date("Y-m-d H:i:s",strtotime("-30 day")));
        while(1){
            $req->setPageNo("".$pageNo);
            $response=TopClient::getInstance()->execute($req);
            $orders=$response->article_biz_orders->article_biz_order;
            $orderIds=[];
            foreach($orders as $order){
                $order=(array)$order;
                $orderIds[]=$order["order_id"];
            }

            $orderIds and VasOrder::deleteAll(["order_id"=>$orderIds]);
            $count+=GlobalModel::batchInsert(VasOrder::className(),$orders);
            if(count($orders)<$pageSize){
                break;
            }
            $pageNo++;
        }
        return $count;
    }
}
