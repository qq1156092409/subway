<?php
/**
 * TOP API: taobao.alitrip.travel.confirm.resource.succeed request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelConfirmResourceSucceedRequest
{
	/** 
	 * 凭证
	 **/
	private $certificate;
	
	/** 
	 * 联系人
	 **/
	private $contactPerson;
	
	/** 
	 * 出票日期
	 **/
	private $issuedDate;
	
	/** 
	 * 核销数量，电子凭证订单必须传入核销数量。其他类型订单可选填
	 **/
	private $quantity;
	
	/** 
	 * 订单ID，电子凭证订单请传入子订单号，其他类型订单传入主订单号
	 **/
	private $tid;
	
	/** 
	 * 旅行结束时间，格式yyyy-mm-dd
	 **/
	private $travelEndDate;
	
	/** 
	 * 旅行开始时间，格式yyyy-mm-dd
	 **/
	private $travelStartDate;
	
	/** 
	 * 出行人信息
	 **/
	private $travelerList;
	
	private $apiParas = array();
	
	public function setCertificate($certificate)
	{
		$this->certificate = $certificate;
		$this->apiParas["certificate"] = $certificate;
	}

	public function getCertificate()
	{
		return $this->certificate;
	}

	public function setContactPerson($contactPerson)
	{
		$this->contactPerson = $contactPerson;
		$this->apiParas["contact_person"] = $contactPerson;
	}

	public function getContactPerson()
	{
		return $this->contactPerson;
	}

	public function setIssuedDate($issuedDate)
	{
		$this->issuedDate = $issuedDate;
		$this->apiParas["issued_date"] = $issuedDate;
	}

	public function getIssuedDate()
	{
		return $this->issuedDate;
	}

	public function setQuantity($quantity)
	{
		$this->quantity = $quantity;
		$this->apiParas["quantity"] = $quantity;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function setTid($tid)
	{
		$this->tid = $tid;
		$this->apiParas["tid"] = $tid;
	}

	public function getTid()
	{
		return $this->tid;
	}

	public function setTravelEndDate($travelEndDate)
	{
		$this->travelEndDate = $travelEndDate;
		$this->apiParas["travel_end_date"] = $travelEndDate;
	}

	public function getTravelEndDate()
	{
		return $this->travelEndDate;
	}

	public function setTravelStartDate($travelStartDate)
	{
		$this->travelStartDate = $travelStartDate;
		$this->apiParas["travel_start_date"] = $travelStartDate;
	}

	public function getTravelStartDate()
	{
		return $this->travelStartDate;
	}

	public function setTravelerList($travelerList)
	{
		$this->travelerList = $travelerList;
		$this->apiParas["traveler_list"] = $travelerList;
	}

	public function getTravelerList()
	{
		return $this->travelerList;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.confirm.resource.succeed";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->tid,"tid");
		RequestCheckUtil::checkNotNull($this->travelEndDate,"travelEndDate");
		RequestCheckUtil::checkNotNull($this->travelStartDate,"travelStartDate");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
