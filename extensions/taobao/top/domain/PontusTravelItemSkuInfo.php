<?php

/**
 * 商品日历价格库存套餐
 * @author auto create
 */
class PontusTravelItemSkuInfo
{
	
	/** 
	 * 映射到具体日历价格套餐的外部商家编码
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
	 * 套餐操作仅限于删除[delete]和修改[modify]&quot;, 该操作修改的是套餐的名称和outer_sku_id
	 **/
	public $package_operation;
	
	/** 
	 * 套餐的日历价格库存。如果是预约商品，只需要填写一个Price，并且，不需要填写Price中的date字段不填，且预约商品只有成人价格和库存。
	 **/
	public $prices;
	
	/** 
	 * package_operation 为midofy时，outer_sku_id将被该值覆盖
	 **/
	public $update_outer_sku_id;	
}
?>