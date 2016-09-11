<?php
/**
 * TOP API: taobao.alitrip.travel.normalvisa.updatepersonstauts request
 * 
 * @author auto create
 * @since 1.0, 2016.07.06
 */
class AlitripTravelNormalvisaUpdatepersonstautsRequest
{
	/** 
	 * 订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 更新信息
	 **/
	private $normalVisaUpdateUnitList;
	
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

	public function setNormalVisaUpdateUnitList($normalVisaUpdateUnitList)
	{
		$this->normalVisaUpdateUnitList = $normalVisaUpdateUnitList;
		$this->apiParas["normal_visa_update_unit_list"] = $normalVisaUpdateUnitList;
	}

	public function getNormalVisaUpdateUnitList()
	{
		return $this->normalVisaUpdateUnitList;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.normalvisa.updatepersonstauts";
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
