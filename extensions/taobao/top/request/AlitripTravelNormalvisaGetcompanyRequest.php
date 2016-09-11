<?php
/**
 * TOP API: taobao.alitrip.travel.normalvisa.getcompany request
 * 
 * @author auto create
 * @since 1.0, 2016.07.06
 */
class AlitripTravelNormalvisaGetcompanyRequest
{
	/** 
	 * true：取5个重要的物流公司 false：取所有的物流公司
	 **/
	private $param0;
	
	private $apiParas = array();
	
	public function setParam0($param0)
	{
		$this->param0 = $param0;
		$this->apiParas["param0"] = $param0;
	}

	public function getParam0()
	{
		return $this->param0;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.normalvisa.getcompany";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->param0,"param0");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
