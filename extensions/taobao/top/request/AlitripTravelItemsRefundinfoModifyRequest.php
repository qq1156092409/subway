<?php
/**
 * TOP API: taobao.alitrip.travel.items.refundinfo.modify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelItemsRefundinfoModifyRequest
{
	/** 
	 * 商品id列表
	 **/
	private $itemIds;
	
	/** 
	 * 退款规则结构
	 **/
	private $refundInfo;
	
	private $apiParas = array();
	
	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
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

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.items.refundinfo.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
