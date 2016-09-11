<?php

/**
 * 航班信息
 * @author auto create
 */
class TopTripTicketInfo
{
	
	/** 
	 * 回程到达时间
	 **/
	public $back_arrive_time;
	
	/** 
	 * 回程航空公司
	 **/
	public $back_company;
	
	/** 
	 * 回程航班
	 **/
	public $back_flight;
	
	/** 
	 * 回程出发机场三字码
	 **/
	public $back_fromcode;
	
	/** 
	 * 返程跨越天数
	 **/
	public $back_over_days;
	
	/** 
	 * 回程舱位
	 **/
	public $back_rbd;
	
	/** 
	 * 回程起飞时间
	 **/
	public $back_takeoff_time;
	
	/** 
	 * 回程航站楼
	 **/
	public $back_terminal;
	
	/** 
	 * 回程到达机场三字码
	 **/
	public $back_tocode;
	
	/** 
	 * 回程机型
	 **/
	public $back_type;
	
	/** 
	 * 去程到达时间
	 **/
	public $go_arrive_time;
	
	/** 
	 * 去程航空公司
	 **/
	public $go_company;
	
	/** 
	 * 去程航班
	 **/
	public $go_flight;
	
	/** 
	 * 去程出发机场三字码
	 **/
	public $go_fromcode;
	
	/** 
	 * 去程跨越天数
	 **/
	public $go_over_days;
	
	/** 
	 * 去程舱位
	 **/
	public $go_rbd;
	
	/** 
	 * 去程起飞时间
	 **/
	public $go_takeoff_time;
	
	/** 
	 * 去程航站楼
	 **/
	public $go_terminal;
	
	/** 
	 * 去程到达机场三字码
	 **/
	public $go_tocode;
	
	/** 
	 * 去程机型
	 **/
	public $go_type;
	
	/** 
	 * 中转信息，不写刚默认为直飞
	 **/
	public $transfers_info;	
}
?>