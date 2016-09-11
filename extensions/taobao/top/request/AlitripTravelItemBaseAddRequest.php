<?php
/**
 * TOP API: taobao.alitrip.travel.item.base.add request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelItemBaseAddRequest
{
	/** 
	 * 必填，商品基本信息
	 **/
	private $baseInfo;
	
	/** 
	 * 必填，预定规则结构
	 **/
	private $bookingRules;
	
	/** 
	 * 特殊选填（当发布邮轮商品时必填，其他情况不填）邮轮商品相关信息，发布邮轮商品时必填
	 **/
	private $cruiseItemExt;
	
	/** 
	 * 特殊选填（当发布自由行商品时必填，其他情况不填）。自由行商品相关信息，自由行商品必填。大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用，自由行商品至少需要填写其中两项
	 **/
	private $freedomItemExt;
	
	/** 
	 * 特殊选填（当发布跟团游商品时必填，其他情况不填）。跟团游商品相关信息，发布跟团游商品时必填
	 **/
	private $groupItemExt;
	
	/** 
	 * 选填，详细行程描述结构
	 **/
	private $itineraries;
	
	/** 
	 * 选填，退款规则结构
	 **/
	private $refundInfo;
	
	/** 
	 * 选填，商品的销售属性相关信息
	 **/
	private $salesInfo;
	
	/** 
	 * 特殊选填（当发布同城活动商品时必填，其他情况不填）同城活动商品相关信息，发布同城活动商品时必填
	 **/
	private $tcwlItemExt;
	
	private $apiParas = array();
	
	public function setBaseInfo($baseInfo)
	{
		$this->baseInfo = $baseInfo;
		$this->apiParas["base_info"] = $baseInfo;
	}

	public function getBaseInfo()
	{
		return $this->baseInfo;
	}

	public function setBookingRules($bookingRules)
	{
		$this->bookingRules = $bookingRules;
		$this->apiParas["booking_rules"] = $bookingRules;
	}

	public function getBookingRules()
	{
		return $this->bookingRules;
	}

	public function setCruiseItemExt($cruiseItemExt)
	{
		$this->cruiseItemExt = $cruiseItemExt;
		$this->apiParas["cruise_item_ext"] = $cruiseItemExt;
	}

	public function getCruiseItemExt()
	{
		return $this->cruiseItemExt;
	}

	public function setFreedomItemExt($freedomItemExt)
	{
		$this->freedomItemExt = $freedomItemExt;
		$this->apiParas["freedom_item_ext"] = $freedomItemExt;
	}

	public function getFreedomItemExt()
	{
		return $this->freedomItemExt;
	}

	public function setGroupItemExt($groupItemExt)
	{
		$this->groupItemExt = $groupItemExt;
		$this->apiParas["group_item_ext"] = $groupItemExt;
	}

	public function getGroupItemExt()
	{
		return $this->groupItemExt;
	}

	public function setItineraries($itineraries)
	{
		$this->itineraries = $itineraries;
		$this->apiParas["itineraries"] = $itineraries;
	}

	public function getItineraries()
	{
		return $this->itineraries;
	}

	public function setRefundInfo($refundInfo)
	{
		$this->refundInfo = $refundInfo;
		$this->apiParas["refund_info"] = $refundInfo;
	}

	public function getRefundInfo()
	{
		return $this->refundInfo;
	}

	public function setSalesInfo($salesInfo)
	{
		$this->salesInfo = $salesInfo;
		$this->apiParas["sales_info"] = $salesInfo;
	}

	public function getSalesInfo()
	{
		return $this->salesInfo;
	}

	public function setTcwlItemExt($tcwlItemExt)
	{
		$this->tcwlItemExt = $tcwlItemExt;
		$this->apiParas["tcwl_item_ext"] = $tcwlItemExt;
	}

	public function getTcwlItemExt()
	{
		return $this->tcwlItemExt;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.item.base.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
