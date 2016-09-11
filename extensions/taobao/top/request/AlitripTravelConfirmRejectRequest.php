<?php
/**
 * TOP API: taobao.alitrip.travel.confirm.reject request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelConfirmRejectRequest
{
	/** 
	 * 订单id
	 **/
	private $bizOrderId;
	
	/** 
	 * 拒绝理由
	 **/
	private $reason;
	
	/** 
	 * 拒绝说明
	 **/
	private $reasonDesc;
	
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

	public function setReason($reason)
	{
		$this->reason = $reason;
		$this->apiParas["reason"] = $reason;
	}

	public function getReason()
	{
		return $this->reason;
	}

	public function setReasonDesc($reasonDesc)
	{
		$this->reasonDesc = $reasonDesc;
		$this->apiParas["reason_desc"] = $reasonDesc;
	}

	public function getReasonDesc()
	{
		return $this->reasonDesc;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.confirm.reject";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->reason,"reason");
		RequestCheckUtil::checkNotNull($this->reasonDesc,"reasonDesc");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
