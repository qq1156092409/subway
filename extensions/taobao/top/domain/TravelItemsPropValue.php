<?php

/**
 * 旅游商品类目属性值结构
 * @author auto create
 */
class TravelItemsPropValue
{
	
	/** 
	 * 商品所属叶子类目ID，旅游度假8个叶子类目。
	 **/
	public $cid;
	
	/** 
	 * 属性值名称。
	 **/
	public $name;
	
	/** 
	 * 属性ID。
	 **/
	public $pid;
	
	/** 
	 * 属性名称。
	 **/
	public $prop_name;
	
	/** 
	 * 排列序号，表示同级类目的展现次序，如数值相等则按名称次序排列。取值范围:大于零的整数。
	 **/
	public $sort_order;
	
	/** 
	 * 属性值ID。
	 **/
	public $vid;	
}
?>