<?php

/**
 * 旅游商品类目属性结构
 * @author auto create
 */
class TravelItemsProp
{
	
	/** 
	 * 商品所属叶子类目ID，旅游度假8个叶子类目
	 **/
	public $cid;
	
	/** 
	 * 是否可枚举。可选值:true(是),false(否)。
	 **/
	public $is_enums;
	
	/** 
	 * 是否可输入。可选值:true(是),false(否)。
	 **/
	public $is_input;
	
	/** 
	 * 是否销售属性。可选值:true(是),false(否)。
	 **/
	public $is_sale_prop;
	
	/** 
	 * 发布商品时是否可以多选。可选值: true (是) , false(否)。
	 **/
	public $multi;
	
	/** 
	 * 发布商品时是否必选。可选值: true (是) , false(否)
	 **/
	public $must;
	
	/** 
	 * 属性名称
	 **/
	public $name;
	
	/** 
	 * 旅游商品类目属性ID
	 **/
	public $pid;
	
	/** 
	 * 排列序号，表示同级类目的展现次序，如数值相等则按名称次序排列。取值范围:大于零的整数
	 **/
	public $sort_order;
	
	/** 
	 * 商品类目属性值集合。
	 **/
	public $travel_items_prop_values;	
}
?>