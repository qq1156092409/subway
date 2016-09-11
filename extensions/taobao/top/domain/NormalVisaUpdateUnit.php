<?php

/**
 * 更新信息
 * @author auto create
 */
class NormalVisaUpdateUnit
{
	
	/** 
	 * 订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 预约地点
	 **/
	public $book_place;
	
	/** 
	 * 预约时间
	 **/
	public $book_time;
	
	/** 
	 * 用户id
	 **/
	public $person_visa_id;
	
	/** 
	 * 物流公司编码
	 **/
	public $post_company_code;
	
	/** 
	 * 物流公司名称
	 **/
	public $post_company_name;
	
	/** 
	 * 物流单号
	 **/
	public $post_number;
	
	/** 
	 * 备注
	 **/
	public $remark;
	
	/** 
	 * 状态：无办理人信息：1001 办理人已填写：1002 已收到资料: 1003 已审核完成: 1004 已送签:1005 结果已返回: 1006 已预约面试: 1007 处理中:1008 已中止办理：1010
	 **/
	public $status;	
}
?>