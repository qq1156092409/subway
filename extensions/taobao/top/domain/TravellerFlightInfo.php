<?php

/**
 * 机票信息
 * @author auto create
 */
class TravellerFlightInfo
{
	
	/** 
	 * 到达城市
	 **/
	public $arr_city;
	
	/** 
	 * 到达城市三字码
	 **/
	public $arr_city_code;
	
	/** 
	 * 航班到达时间，格式yyyy-mm-dd hh:mm:ss
	 **/
	public $arr_time;
	
	/** 
	 * 出发城市
	 **/
	public $dep_city;
	
	/** 
	 * 出发城市三字码
	 **/
	public $dep_city_code;
	
	/** 
	 * 航班起飞时间，格式yyyy-mm-dd hh:mm:ss
	 **/
	public $dep_time;
	
	/** 
	 * 航班号
	 **/
	public $flight_no;
	
	/** 
	 * 航段类型：0，去程；1，回程
	 **/
	public $segment_type;	
}
?>