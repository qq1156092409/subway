<?php
/**
 * TOP API: taobao.alitrip.travel.baseinfo.cruise.get request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelBaseinfoCruiseGetRequest
{
	/** 
	 * true-获取国际邮轮类目扩展信息；false-获取国内邮轮类目扩展信息
	 **/
	private $isOverseas;
	
	private $apiParas = array();
	
	public function setIsOverseas($isOverseas)
	{
		$this->isOverseas = $isOverseas;
		$this->apiParas["is_overseas"] = $isOverseas;
	}

	public function getIsOverseas()
	{
		return $this->isOverseas;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.baseinfo.cruise.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->isOverseas,"isOverseas");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
