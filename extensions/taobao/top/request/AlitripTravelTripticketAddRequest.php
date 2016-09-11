<?php
/**
 * TOP API: taobao.alitrip.travel.tripticket.add request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlitripTravelTripticketAddRequest
{
	/** 
	 * 旅行机票商品发布入参会模型
	 **/
	private $paramPublishTripTicketItemParam;
	
	private $apiParas = array();
	
	public function setParamPublishTripTicketItemParam($paramPublishTripTicketItemParam)
	{
		$this->paramPublishTripTicketItemParam = $paramPublishTripTicketItemParam;
		$this->apiParas["param_publish_trip_ticket_item_param"] = $paramPublishTripTicketItemParam;
	}

	public function getParamPublishTripTicketItemParam()
	{
		return $this->paramPublishTripTicketItemParam;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.tripticket.add";
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
