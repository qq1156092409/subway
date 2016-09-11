<?php
/**
 * TOP API: taobao.alitrip.travel.book.inventory.add request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookInventoryAddRequest
{
	/** 
	 * 新增子套餐名字
	 **/
	private $cellName;
	
	/** 
	 * 新增子套餐备注
	 **/
	private $cellRemark;
	
	/** 
	 * 日历库存信息
	 **/
	private $dateInventoryList;
	
	/** 
	 * 套餐id
	 **/
	private $groupId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	private $apiParas = array();
	
	public function setCellName($cellName)
	{
		$this->cellName = $cellName;
		$this->apiParas["cell_name"] = $cellName;
	}

	public function getCellName()
	{
		return $this->cellName;
	}

	public function setCellRemark($cellRemark)
	{
		$this->cellRemark = $cellRemark;
		$this->apiParas["cell_remark"] = $cellRemark;
	}

	public function getCellRemark()
	{
		return $this->cellRemark;
	}

	public function setDateInventoryList($dateInventoryList)
	{
		$this->dateInventoryList = $dateInventoryList;
		$this->apiParas["date_inventory_list"] = $dateInventoryList;
	}

	public function getDateInventoryList()
	{
		return $this->dateInventoryList;
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
		return "taobao.alitrip.travel.book.inventory.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cellName,"cellName");
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
