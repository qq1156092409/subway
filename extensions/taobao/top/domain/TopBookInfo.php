<?php

/**
 * 预约记录信息
 * @author auto create
 */
class TopBookInfo
{
	
	/** 
	 * 预约记录所属订单id
	 **/
	public $biz_order_id;
	
	/** 
	 * 与子套餐id
	 **/
	public $book_cell_id;
	
	/** 
	 * 预约子套餐名字
	 **/
	public $book_cell_name;
	
	/** 
	 * 预约子套餐备注
	 **/
	public $book_cell_remark;
	
	/** 
	 * 预约套餐id
	 **/
	public $book_group_id;
	
	/** 
	 * 预约组名字
	 **/
	public $book_group_name;
	
	/** 
	 * 预约记录id
	 **/
	public $book_info_id;
	
	/** 
	 * 预约记录状态：1：待审核；2：买家已取消；3：已通过审核；4：商家已驳回
	 **/
	public $book_status;
	
	/** 
	 * 预约出行时间
	 **/
	public $booked_travel_time;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 预约记录取消时间
	 **/
	public $cancel_time;
	
	/** 
	 * 预约记录创建时间
	 **/
	public $create_time;
	
	/** 
	 * 合同状态：1：合同未生成；2：合同已生成待买家签署；3：合同已经签署；6：合同过期未签署
	 **/
	public $econtracts_status;
	
	/** 
	 * 商品id
	 **/
	public $item_id;
	
	/** 
	 * 商品标题
	 **/
	public $item_title;
	
	/** 
	 * 修改时间
	 **/
	public $modify_time;
	
	/** 
	 * 人数
	 **/
	public $people_amount;
	
	/** 
	 * 驳回原因
	 **/
	public $reasons;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家备注
	 **/
	public $seller_remark;
	
	/** 
	 * sku id
	 **/
	public $sku_id;
	
	/** 
	 * sku属性信息
	 **/
	public $sku_property;
	
	/** 
	 * 出行人信息
	 **/
	public $travelers;	
}
?>