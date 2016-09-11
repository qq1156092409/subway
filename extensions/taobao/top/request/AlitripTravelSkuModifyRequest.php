<?php
/**
 * TOP API: taobao.alitrip.travel.sku.modify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelSkuModifyRequest
{
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 库存价格属性
	 **/
	private $skuProperties;
	
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

	public function setSkuProperties($skuProperties)
	{
		$this->skuProperties = $skuProperties;
		$this->apiParas["sku_properties"] = $skuProperties;
	}

	public function getSkuProperties()
	{
		return $this->skuProperties;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.sku.modify";
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
