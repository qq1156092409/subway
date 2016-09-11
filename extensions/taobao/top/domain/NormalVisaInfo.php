<?php

/**
 * 结果
 * @author auto create
 */
class NormalVisaInfo
{
	
	/** 
	 * 数量
	 **/
	public $amount;
	
	/** 
	 * 单价
	 **/
	public $auction_price;
	
	/** 
	 * 订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 是否达到中止状态
	 **/
	public $end_status;
	
	/** 
	 * 是否需要商家代填
	 **/
	public $need_fill_contact;
	
	/** 
	 * 1:贴纸签  2:电子签  3:面试
	 **/
	public $normal_visa_type;
	
	/** 
	 * 支付时间
	 **/
	public $pay_time;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 无办理人信息：1001 办理人已填写：1002 已收到资料: 1003 已审核完成: 1004 已送签:1005 结果已返回: 1006 已预约面试: 1007 处理中:1008 已中止办理：1010
	 **/
	public $status;
	
	/** 
	 * 无办理人信息：1001 办理人已填写：1002 已收到资料: 1003 已审核完成: 1004 已送签:1005 结果已返回: 1006 已预约面试: 1007 处理中:1008 已中止办理：1010
	 **/
	public $status_desc;
	
	/** 
	 * 标题
	 **/
	public $title;	
}
?>