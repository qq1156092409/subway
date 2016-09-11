<?php

/**
 * 日历价格库存
 * @author auto create
 */
class ComboPriceCalendar
{
	
	/** 
	 * 套餐日历价格库存 约束：套餐最多6个
	 **/
	public $combo_price_calins;
	
	/** 
	 * 套餐级别的商家编号，商家编码可以为null，最大为512字节
	 **/
	public $outer_id;
	
	/** 
	 * 套餐名，套餐名称不能为空，而且同一个商品的不同套餐不能重名
	 **/
	public $package_name;	
}
?>