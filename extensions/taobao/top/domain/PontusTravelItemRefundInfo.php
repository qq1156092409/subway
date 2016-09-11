<?php

/**
 * 退款规则结构
 * @author auto create
 */
class PontusTravelItemRefundInfo
{
	
	/** 
	 * 退改规则 1）格式：标准规则 或 自定义规则：a_a_num  2）规则：自定义规则里最多可含5组规则
	 **/
	public $refund_regulations;
	
	/** 
	 * 退改规则类型，0为标准，1为自定义，2为不支持退改规则。不传默认为0
	 **/
	public $refund_type;	
}
?>