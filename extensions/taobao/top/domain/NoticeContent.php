<?php

/**
 * 通知内容，k/v格式，key指定可以使用的，范围外的不处理
 * @author auto create
 */
class NoticeContent
{
	
	/** 
	 * 内容key，只可以使用系统开放的key，其他的key不处理。开放的key有：certificate（凭证），depDate（出发日期），backDate（返程日期），contactName（联系人姓名），contactPhone（联系人电话），contactEmail（联系人邮箱），traveller（出行人信息）
	 **/
	public $key;
	
	/** 
	 * 内容value
	 **/
	public $value;	
}
?>