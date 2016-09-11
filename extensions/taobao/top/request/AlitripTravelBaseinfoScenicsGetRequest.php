<?php
/**
 * TOP API: taobao.alitrip.travel.baseinfo.scenics.get request
 * 
 * @author auto create
 * @since 1.0, 2016.06.24
 */
class AlitripTravelBaseinfoScenicsGetRequest
{
	/** 
	 * 城市名称
	 **/
	private $city;
	
	/** 
	 * 景点简称
	 **/
	private $scenic;
	
	/** 
	 * 景点id，可选。若传了该值，则查询结果中只会保留该id的景点，其余景点信息将被过滤
	 **/
	private $scenicId;
	
	private $apiParas = array();
	
	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setScenic($scenic)
	{
		$this->scenic = $scenic;
		$this->apiParas["scenic"] = $scenic;
	}

	public function getScenic()
	{
		return $this->scenic;
	}

	public function setScenicId($scenicId)
	{
		$this->scenicId = $scenicId;
		$this->apiParas["scenic_id"] = $scenicId;
	}

	public function getScenicId()
	{
		return $this->scenicId;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.baseinfo.scenics.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->scenic,"scenic");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
