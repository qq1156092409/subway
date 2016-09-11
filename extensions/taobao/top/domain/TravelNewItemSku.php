<?php

/**
 * 度假商品sku信息
 * @author auto create
 */
class TravelNewItemSku
{
	
	/** 
	 * 日期
	 **/
	public $day;
	
	/** 
	 * 标记 位
	 **/
	public $flag;
	
	/** 
	 * 主键id
	 **/
	public $id;
	
	/** 
	 * 库存Id
	 **/
	public $inventory_id;
	
	/** 
	 * 月份
	 **/
	public $month;
	
	/** 
	 * 外部商家编码
	 **/
	public $outer_id;
	
	/** 
	 * 套餐Id
	 **/
	public $package_id;
	
	/** 
	 * 套餐名字
	 **/
	public $package_name;
	
	/** 
	 * 价格，分为单位
	 **/
	public $price;
	
	/** 
	 * 价格类型，成人、儿童 ADULT(1), KID(2), SUPPLEMENT(3);
	 **/
	public $price_type;
	
	/** 
	 * 库存数量
	 **/
	public $quantity;
	
	/** 
	 * IC对应的sku id
	 **/
	public $sku_id;
	
	/** 
	 * 度假商品库主表的商品Id
	 **/
	public $titem_id;
	
	/** 
	 * 预扣库存数
	 **/
	public $with_holding_quantity;
	
	/** 
	 * 年份
	 **/
	public $year;	
}
?>