<?php
/**
 * TOP API: taobao.alitrip.travel.tripticket.sku.update request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelTripticketSkuUpdateRequest
{
	/** 
	 * 修改旅行机票sku信息
	 **/
	private $modifyTripTicketItemSkuParam;
	
	private $apiParas = array();
	
	public function setModifyTripTicketItemSkuParam($modifyTripTicketItemSkuParam)
	{
		$this->modifyTripTicketItemSkuParam = $modifyTripTicketItemSkuParam;
		$this->apiParas["modify_trip_ticket_item_sku_param"] = $modifyTripTicketItemSkuParam;
	}

	public function getModifyTripTicketItemSkuParam()
	{
		return $this->modifyTripTicketItemSkuParam;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.tripticket.sku.update";
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
