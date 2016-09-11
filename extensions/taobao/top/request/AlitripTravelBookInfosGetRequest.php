<?php
/**
 * TOP API: taobao.alitrip.travel.book.infos.get request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlitripTravelBookInfosGetRequest
{
	/** 
	 * 订单id
	 **/
	private $bizOrderId;
	
	/** 
	 * 预约记录id
	 **/
	private $bookInfoId;
	
	/** 
	 * 预约记录状态
	 **/
	private $bookStatus;
	
	/** 
	 * 当前页码
	 **/
	private $currentPage;
	
	/** 
	 * 记录修改的结束时间
	 **/
	private $modifyTimeEnd;
	
	/** 
	 * 记录修改的开始时间
	 **/
	private $modifyTimeStart;
	
	/** 
	 * 每页尺寸
	 **/
	private $pageSize;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBookInfoId($bookInfoId)
	{
		$this->bookInfoId = $bookInfoId;
		$this->apiParas["book_info_id"] = $bookInfoId;
	}

	public function getBookInfoId()
	{
		return $this->bookInfoId;
	}

	public function setBookStatus($bookStatus)
	{
		$this->bookStatus = $bookStatus;
		$this->apiParas["book_status"] = $bookStatus;
	}

	public function getBookStatus()
	{
		return $this->bookStatus;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setModifyTimeEnd($modifyTimeEnd)
	{
		$this->modifyTimeEnd = $modifyTimeEnd;
		$this->apiParas["modify_time_end"] = $modifyTimeEnd;
	}

	public function getModifyTimeEnd()
	{
		return $this->modifyTimeEnd;
	}

	public function setModifyTimeStart($modifyTimeStart)
	{
		$this->modifyTimeStart = $modifyTimeStart;
		$this->apiParas["modify_time_start"] = $modifyTimeStart;
	}

	public function getModifyTimeStart()
	{
		return $this->modifyTimeStart;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.infos.get";
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
