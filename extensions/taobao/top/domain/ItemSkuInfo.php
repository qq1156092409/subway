<?php

/**
 * 商品日历价格库存套餐
 * @author auto create
 */
class ItemSkuInfo
{
	
	/** 
	 * 必填，外部商家映射到具体套餐的SKU ID，一般为外部商家具体商品ID。
	 **/
	public $outer_sku_id;
	
	/** 
	 * 套餐描述
	 **/
	public $package_desc;
	
	/** 
	 * 套餐名称
	 **/
	public $package_name;
	
	/** 
	 * 必填，套餐操作：1-增加一个套餐，2-删除一个套餐（根据outer_sku_id定位该套餐），3-覆盖修改一个套餐（根据outer_sku_id定位该套餐）
	 **/
	public $package_operation;
	
	/** 
	 * 商品日历价格库存相关信息
	 **/
	public $prices;	
}
?>