<?php
/**
 * TOP API: taobao.alitrip.travel.normalvisa.storeuser request
 * 
 * @author auto create
 * @since 1.0, 2016.07.06
 */
class AlitripTravelNormalvisaStoreuserRequest
{
	/** 
	 * 订单id
	 **/
	private $bizOrderId;
	
	/** 
	 * 列表：签证人信息列表
	 **/
	private $normalVisaUserUnitList;
	
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

	public function setNormalVisaUserUnitList($normalVisaUserUnitList)
	{
		$this->normalVisaUserUnitList = $normalVisaUserUnitList;
		$this->apiParas["normal_visa_user_unit_list"] = $normalVisaUserUnitList;
	}

	public function getNormalVisaUserUnitList()
	{
		return $this->normalVisaUserUnitList;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.normalvisa.storeuser";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
