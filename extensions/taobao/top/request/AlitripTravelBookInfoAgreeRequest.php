<?php
/**
 * TOP API: taobao.alitrip.travel.book.info.agree request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookInfoAgreeRequest
{
	/** 
	 * 预约记录id
	 **/
	private $bookInfoId;
	
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

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.info.agree";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bookInfoId,"bookInfoId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
