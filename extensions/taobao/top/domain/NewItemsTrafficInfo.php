<?php

/**
 * 去程或回程交通信息
 * @author auto create
 */
class NewItemsTrafficInfo
{
	
	/** 
	 * 去程或者回程类型 1为去程交通，2为回程交通，仅自由行填写
	 **/
	public $direction_type;
	
	/** 
	 * 航班号或者车次号
	 **/
	public $infos;
	
	/** 
	 * 交通类型，1飞机，2火车，3汽车，4轮船，100其他，仅自由行填写
	 **/
	public $transport_type;	
}
?>