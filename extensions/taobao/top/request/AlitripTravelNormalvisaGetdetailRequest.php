<?php
/**
 * TOP API: taobao.alitrip.travel.normalvisa.getdetail request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelNormalvisaGetdetailRequest
{
	/** 
	 * 订单id
	 **/
	private $bizOrderId;
	
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

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.normalvisa.getdetail";
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
