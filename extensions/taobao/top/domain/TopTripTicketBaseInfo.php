<?php

/**
 * 旅行机票商品基本信息
 * @author auto create
 */
class TopTripTicketBaseInfo
{
	
	/** 
	 * 行程晚数
	 **/
	public $accom_nights;
	
	/** 
	 * 商品状态（0，1正常;-1:用户删除;-2:用户下架;-3 小二下架;-4 小二删除;-5 从未上架;-9 CC）
	 **/
	public $approve_status;
	
	/** 
	 * 预定须知
	 **/
	public $book_tips;
	
	/** 
	 * 更多商品描述(PC描述)
	 **/
	public $desc;
	
	/** 
	 * 是否含税
	 **/
	public $has_tax;
	
	/** 
	 * 最大购买数（不写默认为0，0表示不限制）
	 **/
	public $max_limit;
	
	/** 
	 * 最小购买数（不写默认为0，0表示不限制）
	 **/
	public $min_limit;
	
	/** 
	 * 商户编码
	 **/
	public $out_id;
	
	/** 
	 * 商品图片，最多支持5张，第一张为主图，可选，不写则默认从目的地库中查询。
	 **/
	public $pic_urls;
	
	/** 
	 * 退改规则
	 **/
	public $refund_terms;
	
	/** 
	 * 商品亮点。目前最多支持4个亮点，超过4个的亮点描述不会被保存；每个亮点描述35个字符以内
	 **/
	public $sub_titles;
	
	/** 
	 * 商品标题，可选，如果不写，则根据出发地，目的地，行程时间组装，如“杭州-三亚 4天3晚”
	 **/
	public $title;
	
	/** 
	 * 最大行程天数
	 **/
	public $trip_max_days;
	
	/** 
	 * 最小行程天数
	 **/
	public $trip_min_days;	
}
?>