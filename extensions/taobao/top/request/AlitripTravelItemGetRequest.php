<?php
/**
 * TOP API: taobao.alitrip.travel.item.get request
 * 
 * @author auto create
 * @since 1.0, 2015.07.02
 */
class AlitripTravelItemGetRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
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

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.item.get";
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
