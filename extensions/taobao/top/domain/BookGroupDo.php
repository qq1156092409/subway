<?php

/**
 * 1
 * @author auto create
 */
class BookGroupDo
{
	
	/** 
	 * 1
	 **/
	public $book_cell_list;
	
	/** 
	 * 预约确认形式，1：立即确认 2：需审批。默认为2
	 **/
	public $confirm_type;
	
	/** 
	 * 套餐id
	 **/
	public $group_id;
	
	/** 
	 * 套餐名字
	 **/
	public $group_name;
	
	/** 
	 * 套餐备注
	 **/
	public $remark;
	
	/** 
	 * 返程类型 1：需要返程 2:不需要返程。默认为2
	 **/
	public $return_type;	
}
?>