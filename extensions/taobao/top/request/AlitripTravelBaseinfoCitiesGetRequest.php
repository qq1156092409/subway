<?php
/**
 * TOP API: taobao.alitrip.travel.baseinfo.cities.get request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelBaseinfoCitiesGetRequest
{
	/** 
	 * 1-国内跟团游 2-国内自由行 3-出境跟团游 4-出境自由行 5-境外当地玩乐 6-国际邮轮 9-国内邮轮
	 **/
	private $catType;
	
	/** 
	 * 1-获取目的地城市列表 2-获取出发地城市列表
	 **/
	private $iocType;
	
	private $apiParas = array();
	
	public function setCatType($catType)
	{
		$this->catType = $catType;
		$this->apiParas["cat_type"] = $catType;
	}

	public function getCatType()
	{
		return $this->catType;
	}

	public function setIocType($iocType)
	{
		$this->iocType = $iocType;
		$this->apiParas["ioc_type"] = $iocType;
	}

	public function getIocType()
	{
		return $this->iocType;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.baseinfo.cities.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->catType,"catType");
		RequestCheckUtil::checkNotNull($this->iocType,"iocType");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
