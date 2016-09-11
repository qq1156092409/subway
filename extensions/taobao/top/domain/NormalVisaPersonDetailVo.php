<?php

/**
 * 用户信息数组
 * @author auto create
 */
class NormalVisaPersonDetailVo
{
	
	/** 
	 * 订单号
	 **/
	public $biz_order_id;
	
	/** 
	 * 证件信息
	 **/
	public $credential_card_infor;
	
	/** 
	 * 证件号
	 **/
	public $credential_card_no;
	
	/** 
	 * 当前状态：无办理人信息：1001 办理人已填写：1002 已收到资料: 1003 已审核完成: 1004 已送签:1005 结果已返回: 1006 已预约面试: 1007 处理中:1008 已中止办理：1010
	 **/
	public $current_status;
	
	/** 
	 * 当前状态：1001,1002,1003,1004,1005,1006,1007,1008,1010
	 **/
	public $current_status_desc;
	
	/** 
	 * 是否达到最终状态
	 **/
	public $disabled;
	
	/** 
	 * 中止状态
	 **/
	public $finish_status;
	
	/** 
	 * 中止状态
	 **/
	public $finish_status_desc;
	
	/** 
	 * 是否包含结束状态
	 **/
	public $has_finish_status;
	
	/** 
	 * 是否有下个状态
	 **/
	public $has_next_status;
	
	/** 
	 * 姓名
	 **/
	public $name;
	
	/** 
	 * 下一个状态：无办理人信息：1001 办理人已填写：1002 已收到资料: 1003 已审核完成: 1004 已送签:1005 结果已返回: 1006 已预约面试: 1007 处理中:1008 已中止办理：1010
	 **/
	public $next_current_status;
	
	/** 
	 * 下一个状态描述：无办理人信息：1001 办理人已填写：1002 已收到资料: 1003 已审核完成: 1004 已送签:1005 结果已返回: 1006 已预约面试: 1007 处理中:1008 已中止办理：1010
	 **/
	public $next_current_status_desc;
	
	/** 
	 * 用户id
	 **/
	public $person_visa_id;
	
	/** 
	 * 备注
	 **/
	public $remark;	
}
?>