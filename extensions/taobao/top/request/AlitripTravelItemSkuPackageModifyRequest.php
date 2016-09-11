<?php
/**
 * TOP API: taobao.alitrip.travel.item.sku.package.modify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelItemSkuPackageModifyRequest
{
	/** 
	 * 商品ID
	 **/
	private $itemId;
	
	/** 
	 * 商品日历价格库存套餐
	 **/
	private $skus;
	
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

	public function setSkus($skus)
	{
		$this->skus = $skus;
		$this->apiParas["skus"] = $skus;
	}

	public function getSkus()
	{
		return $this->skus;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.item.sku.package.modify";
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
