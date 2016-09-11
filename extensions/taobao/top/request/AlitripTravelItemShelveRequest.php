<?php
/**
 * TOP API: taobao.alitrip.travel.item.shelve request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelItemShelveRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 1-上架 0-下架
	 **/
	private $itemStatus;
	
	/** 
	 * 指定定时上架时间，格式：yyyy-MM-dd HH:mm:ss。若不设置该值且item_status为1，则表示立即上架。
	 **/
	private $onlineTime;
	
	private $apiParas = array();
	
	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemStatus($itemStatus)
	{
		$this->itemStatus = $itemStatus;
		$this->apiParas["item_status"] = $itemStatus;
	}

	public function getItemStatus()
	{
		return $this->itemStatus;
	}

	public function setOnlineTime($onlineTime)
	{
		$this->onlineTime = $onlineTime;
		$this->apiParas["online_time"] = $onlineTime;
	}

	public function getOnlineTime()
	{
		return $this->onlineTime;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.item.shelve";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->itemStatus,"itemStatus");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
