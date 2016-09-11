<?php

/**
 * 集合地结构
 * @author auto create
 */
class PontusTravelGatherPlaceInfo
{
	
	/** 
	 * 地点名称
	 **/
	public $name;
	
	/** 
	 * 集合地经纬度，英文逗号分隔。经度在前，纬度在后，英文逗号分隔最多支持6位小数，如120.111222,30.111222
	 **/
	public $poi;
	
	/** 
	 * POI来源，AMAP/GOOGLE。境内为高德（AMAP） 境外为GOOGLE
	 **/
	public $poi_resource;	
}
?>