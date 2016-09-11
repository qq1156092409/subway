<?php
/**
 * TOP API: taobao.alitrip.travel.tripticket.update request
 * 
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlitripTravelTripticketUpdateRequest
{
	/** 
	 * 修改旅行机票商品信息
	 **/
	private $paramModifyTripTicketItemWithOutSkuParam;
	
	private $apiParas = array();
	
	public function setParamModifyTripTicketItemWithOutSkuParam($paramModifyTripTicketItemWithOutSkuParam)
	{
		$this->paramModifyTripTicketItemWithOutSkuParam = $paramModifyTripTicketItemWithOutSkuParam;
		$this->apiParas["param_modify_trip_ticket_item_with_out_sku_param"] = $paramModifyTripTicketItemWithOutSkuParam;
	}

	public function getParamModifyTripTicketItemWithOutSkuParam()
	{
		return $this->paramModifyTripTicketItemWithOutSkuParam;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.tripticket.update";
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
