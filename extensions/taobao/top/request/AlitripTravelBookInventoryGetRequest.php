<?php
/**
 * TOP API: taobao.alitrip.travel.book.inventory.get request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookInventoryGetRequest
{
	/** 
	 * 子套餐id
	 **/
	private $cellId;
	
	/** 
	 * 结束日期
	 **/
	private $endDate;
	
	/** 
	 * 套餐id
	 **/
	private $groupId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 开始日期
	 **/
	private $startDate;
	
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

	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
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

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.inventory.get";
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
