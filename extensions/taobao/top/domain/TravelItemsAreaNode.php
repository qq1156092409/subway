<?php

/**
 * 旅游度假商品地区结构。
 * @author auto create
 */
class TravelItemsAreaNode
{
	
	/** 
	 * 该地区下所有下级地区集合(目前地区只有两级，国内：省-市；国际： 国家-城市)。
	 **/
	public $sub_prop_values;
	
	/** 
	 * 地区属性值。
	 **/
	public $travel_items_prop_value;	
}
?>