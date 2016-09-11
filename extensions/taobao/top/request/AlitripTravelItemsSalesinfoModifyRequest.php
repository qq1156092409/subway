<?php
/**
 * TOP API: taobao.alitrip.travel.items.salesinfo.modify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelItemsSalesinfoModifyRequest
{
	/** 
	 * 是否橱窗推荐
	 **/
	private $hasShowcase;
	
	/** 
	 * 商品id列表
	 **/
	private $itemIds;
	
	/** 
	 * 关联商品与店铺类目。结构:"cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。 支持最大长度为：256 支持的最大列表长度为：256;如何获取cid：进入店铺，点击叶子类目，页面URL里包含“category-1079296278.htm”;，红色标记数字就是叶子类目ID
	 **/
	private $sellerCids;
	
	private $apiParas = array();
	
	public function setHasShowcase($hasShowcase)
	{
		$this->hasShowcase = $hasShowcase;
		$this->apiParas["has_showcase"] = $hasShowcase;
	}

	public function getHasShowcase()
	{
		return $this->hasShowcase;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["item_ids"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.items.salesinfo.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->itemIds,20,"itemIds");
		RequestCheckUtil::checkMaxListSize($this->sellerCids,20,"sellerCids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
