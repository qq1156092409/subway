<?php

/**
 * 详细行程描述结构
 * @author auto create
 */
class PontusTravelItemItineraryInfo
{
	
	/** 
	 * 必填，1.可选择纯文本 2.使用xml标签（img和txt）进行图文混排，目前仅支持一段文字和多张图片，如果文件有多段，将会被合并 3.每段行程文字总和小于1500字
	 **/
	public $content;
	
	/** 
	 * 行程编号，第一天行程为1，第二天行程为2
	 **/
	public $itinerary_no;
	
	/** 
	 * 小于等于30字
	 **/
	public $title;	
}
?>