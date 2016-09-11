<?php

/**
 * 度假商品信息
 * @author auto create
 */
class TravelItemInfo
{
	
	/** 
	 * 需提前预约的天数
	 **/
	public $book_days_ahead;
	
	/** 
	 * 商品所属类目
	 **/
	public $category_id;
	
	/** 
	 * 延后销售天数（单位：天），发布或修改商品时设置推迟多久才开始销售 	 * 一口价商品默认为7；拍卖商品调用方传入7或者14
	 **/
	public $duration;
	
	/** 
	 * 商品扩展属性
	 **/
	public $extend_properties;
	
	/** 
	 * 商品特征
	 **/
	public $features;
	
	/** 
	 * 商品创建时间
	 **/
	public $gmt_created;
	
	/** 
	 * 商品修改时间
	 **/
	public $gmt_modified;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 0，1正常;-1:用户删除;-2:用户下架;-3 小二下架;-4 小二删除;-5 从未上架;-9 CC
	 **/
	public $item_status;
	
	/** 
	 * 商家编码
	 **/
	public $outer_id;
	
	/** 
	 * 属性别名，例如：套餐别名
	 **/
	public $properties_alias;
	
	/** 
	 * 销售类型-是否预约商品1-普通商品,2－预约商品，3-拍卖商品;
	 **/
	public $sell_type;
	
	/** 
	 * 卖家Id
	 **/
	public $seller_id;
	
	/** 
	 * ddd
	 **/
	public $skus;
	
	/** 
	 * 商品标题
	 **/
	public $title;	
}
?>