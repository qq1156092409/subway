<?php
/**
 * TOP API: taobao.alitrip.travel.item.base.modify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelItemBaseModifyRequest
{
	/** 
	 * 商品基本信息
	 **/
	private $baseInfo;
	
	/** 
	 * 预定规则结构
	 **/
	private $bookingRules;
	
	/** 
	 * 邮轮商品相关扩展信息
	 **/
	private $cruiseItemExt;
	
	/** 
	 * 可选，支持清空商品某些字段内容。多个待清空字段名之间以英文逗号分隔。目前支持清除以下字段内容：seller_cids表示删除关联的店铺类目id
	 **/
	private $fieldsToClean;
	
	/** 
	 * 自由行商品相关信息
	 **/
	private $freedomItemExt;
	
	/** 
	 * 跟团游商品相关信息
	 **/
	private $groupItemExt;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 详细行程描述结构
	 **/
	private $itineraries;
	
	/** 
	 * 退款规则结构
	 **/
	private $refundInfo;
	
	/** 
	 * 商品的销售属性相关信息
	 **/
	private $salesInfo;
	
	/** 
	 * 同城活动商品相关扩展信息
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

	public function setFieldsToClean($fieldsToClean)
	{
		$this->fieldsToClean = $fieldsToClean;
		$this->apiParas["fields_to_clean"] = $fieldsToClean;
	}

	public function getFieldsToClean()
	{
		return $this->fieldsToClean;
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

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
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
		return "taobao.alitrip.travel.item.base.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
