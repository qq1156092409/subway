<?php

/**
 * 详细交通信息结构
 * @author auto create
 */
class PontusTravelItemTraffic
{
	
	/** 
	 * 到达时间，当地时间HH:mm
	 **/
	public $arrival_time;
	
	/** 
	 * 出发城市
	 **/
	public $departure;
	
	/** 
	 * 出发时间，当地时间HH:mm
	 **/
	public $departure_time;
	
	/** 
	 * 到达城市
	 **/
	public $destination;
	
	/** 
	 * 飞机机型，飞机选填
	 **/
	public $plane_type;
	
	/** 
	 * 参考班次号，飞机需要填航班号，火车需要填车次号，汽车和船可不填
	 **/
	public $traffic_no;
	
	/** 
	 * 交通公司名，飞机选填
	 **/
	public $vendor;	
}
?>