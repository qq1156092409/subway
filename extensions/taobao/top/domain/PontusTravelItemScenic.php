<?php

/**
 * 详细景点结构
 * @author auto create
 */
class PontusTravelItemScenic
{
	
	/** 
	 * 必填，景点所在城市
	 **/
	public $city;
	
	/** 
	 * 必填，景点名称
	 **/
	public $cn_name;
	
	/** 
	 * 景点的经纬度信息，经度在前，纬度在后，英文逗号分隔 最多支持6位小数，如120.111222,30.111222
	 **/
	public $poi;
	
	/** 
	 * POI来源，AMAP/GOOGLE。境内为高德（AMAP） 境外为GOOGLE
	 **/
	public $poi_resource;
	
	/** 
	 * 必填，门票类型
	 **/
	public $ticket_type;	
}
?>