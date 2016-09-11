<?php

/**
 * 大景点结构
 * @author auto create
 */
class PontusTravelItemScenicInfo
{
	
	/** 
	 * 景点描述文本，<1500字符 景点结构化信息和文本描述二选一
	 **/
	public $scenic_desc;
	
	/** 
	 * 结构化景点信息 景点结构化信息和文本描述二选一
	 **/
	public $scenic_list;
	
	/** 
	 * 门票套餐名称
	 **/
	public $ticket_package_name;	
}
?>