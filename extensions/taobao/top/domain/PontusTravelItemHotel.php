<?php

/**
 * 详细酒店信息
 * @author auto create
 */
class PontusTravelItemHotel
{
	
	/** 
	 * 必填，所在城市
	 **/
	public $city;
	
	/** 
	 * 必填，酒店名称
	 **/
	public $cn_name;
	
	/** 
	 * 必填，酒店等级
	 **/
	public $hotel_level;
	
	/** 
	 * 必填，酒店房型
	 **/
	public $house_type;
	
	/** 
	 * 酒店的经纬度信息，经度在前，纬度在后，英文逗号分隔 最多支持6位小数，如120.111222,30.111222
	 **/
	public $poi;
	
	/** 
	 * POI来源，AMAP/GOOGLE。境内为高德（AMAP） 境外为GOOGLE
	 **/
	public $poi_resource;	
}
?>