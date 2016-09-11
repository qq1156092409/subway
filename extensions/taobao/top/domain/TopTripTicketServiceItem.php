<?php

/**
 * 旅行机票服务信息
 * @author auto create
 */
class TopTripTicketServiceItem
{
	
	/** 
	 * 服务商品分类(1-WIFI，2-酒店，3-接送机，4-贵宾券，5-礼包，6-消费券，7-保险，8-一日游，9-门票，10-升舱，11-电话卡)
	 **/
	public $category;
	
	/** 
	 * 服务商品特征(";"分隔特征，“,”分隔键值对，形式如：“key1:value1;key2:value2”)
	 **/
	public $features;
	
	/** 
	 * 服务级别
	 **/
	public $level;
	
	/** 
	 * 服务商品图片
	 **/
	public $pic_url;
	
	/** 
	 * 服务商品价格
	 **/
	public $price;
	
	/** 
	 * 服务描述
	 **/
	public $service_desc;
	
	/** 
	 * 服务名称
	 **/
	public $service_name;	
}
?>