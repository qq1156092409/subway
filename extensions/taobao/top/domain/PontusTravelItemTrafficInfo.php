<?php

/**
 * 大交通结构
 * @author auto create
 */
class PontusTravelItemTrafficInfo
{
	
	/** 
	 * 描述，小于1500字
	 **/
	public $traffic_desc;
	
	/** 
	 * 必填，交通类型。1/2/3/4 分别对应 飞机/火车/汽车/船
	 **/
	public $traffic_type;
	
	/** 
	 * 详细交通信息结构。【注意】当traffic_type选择飞机或火车时，该字段为必填，汽车或轮船时该字段不用填。
	 **/
	public $traffics;	
}
?>