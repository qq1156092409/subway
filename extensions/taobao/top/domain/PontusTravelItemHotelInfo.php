<?php

/**
 * 酒店结构
 * @author auto create
 */
class PontusTravelItemHotelInfo
{
	
	/** 
	 * 必填，默认为0 必须大于等于0, 且小于或等于行程晚数
	 **/
	public $hotel_days;
	
	/** 
	 * 酒店描述文本，&lt;1500字符 酒店结构化信息和文本描述二选一
	 **/
	public $hotel_desc;
	
	/** 
	 * 结构化酒店信息 酒店结构化信息和文本描述二选一
	 **/
	public $hotel_list;	
}
?>