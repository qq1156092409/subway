<?php
/**
 * TOP API: taobao.alitrip.travel.book.info.reject request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookInfoRejectRequest
{
	/** 
	 * 预约记录id
	 **/
	private $bookInfoId;
	
	/** 
	 * 驳回理由
	 **/
	private $reasons;
	
	/** 
	 * 卖家备注
	 **/
	private $sellerRemark;
	
	private $apiParas = array();
	
	public function setBookInfoId($bookInfoId)
	{
		$this->bookInfoId = $bookInfoId;
		$this->apiParas["book_info_id"] = $bookInfoId;
	}

	public function getBookInfoId()
	{
		return $this->bookInfoId;
	}

	public function setReasons($reasons)
	{
		$this->reasons = $reasons;
		$this->apiParas["reasons"] = $reasons;
	}

	public function getReasons()
	{
		return $this->reasons;
	}

	public function setSellerRemark($sellerRemark)
	{
		$this->sellerRemark = $sellerRemark;
		$this->apiParas["seller_remark"] = $sellerRemark;
	}

	public function getSellerRemark()
	{
		return $this->sellerRemark;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.info.reject";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookInfoId,"bookInfoId");
		RequestCheckUtil::checkNotNull($this->reasons,"reasons");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
