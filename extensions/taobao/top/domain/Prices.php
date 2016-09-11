<?php

/**
 * 商品日历价格库存相关信息
 * @author auto create
 */
class Prices
{
	
	/** 
	 * 日期。对于普通商品必填，对于预约商品该字段不填
	 **/
	public $date;
	
	/** 
	 * 外部商家团期ID
	 **/
	public $outer_price_id;
	
	/** 
	 * 价格
	 **/
	public $price;
	
	/** 
	 * 价格类型。price_type 取：1-成人价，2-儿童价，3-单房差
	 **/
	public $price_type;
	
	/** 
	 * 库存
	 **/
	public $stock;	
}
?>