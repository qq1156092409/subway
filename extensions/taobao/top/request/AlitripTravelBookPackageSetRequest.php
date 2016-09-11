<?php
/**
 * TOP API: taobao.alitrip.travel.book.package.set request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookPackageSetRequest
{
	/** 
	 * 预约确认形式，1：立即确认 2：需审批。默认为2
	 **/
	private $confirmType;
	
	/** 
	 * 套餐id
	 **/
	private $groupId;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 套餐备注
	 **/
	private $remark;
	
	/** 
	 * 返程类型 1：需要返程 2:不需要返程。默认为2
	 **/
	private $returnType;
	
	private $apiParas = array();
	
	public function setConfirmType($confirmType)
	{
		$this->confirmType = $confirmType;
		$this->apiParas["confirm_type"] = $confirmType;
	}

	public function getConfirmType()
	{
		return $this->confirmType;
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

	public function setRemark($remark)
	{
		$this->remark = $remark;
		$this->apiParas["remark"] = $remark;
	}

	public function getRemark()
	{
		return $this->remark;
	}

	public function setReturnType($returnType)
	{
		$this->returnType = $returnType;
		$this->apiParas["return_type"] = $returnType;
	}

	public function getReturnType()
	{
		return $this->returnType;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.package.set";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->groupId,"groupId");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkNotNull($this->remark,"remark");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
