<?php

/**
 * 跟团游商品相关信息
 * @author auto create
 */
class PontusTravelGroupItemExt
{
	
	/** 
	 * 必填，回程交通信息
	 **/
	public $back_traffic_info;
	
	/** 
	 * 是否支持电子合同，默认不支持
	 **/
	public $electronic;
	
	/** 
	 * 集合地信息
	 **/
	public $gather_places;
	
	/** 
	 * 必填，去程交通信息
	 **/
	public $go_traffic_info;
	
	/** 
	 * 必填，线路类型，0 为目的地参团 	1为出发地参团
	 **/
	public $route_type;	
}
?>