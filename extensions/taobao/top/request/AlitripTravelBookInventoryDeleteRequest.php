<?php
/**
 * TOP API: taobao.alitrip.travel.book.inventory.delete request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookInventoryDeleteRequest
{
	/** 
	 * 子套餐id
	 **/
	private $cellId;
	
	/** 
	 * 套餐id
	 **/
	private $groupId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setCellId($cellId)
	{
		$this->cellId = $cellId;
		$this->apiParas["cell_id"] = $cellId;
	}

	public function getCellId()
	{
		return $this->cellId;
	}

	public function setGroupId($groupId)
	{
		$this->groupId = $groupId;
		$this->apiParas["group_id"] = $groupId;
	}

	public function getGroupId()
	{
		return $this->groupId;
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

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.inventory.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cellId,"cellId");
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
