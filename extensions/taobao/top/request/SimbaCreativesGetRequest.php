<?php
class SimbaCreativesGetRequest
{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
		
	public function setAdgroupId($adgroup_id )
	{
		$this->apiParas['adgroup_id'] = $adgroup_id ;
	}
	
	public function setCreativeIds($creative_ids )
	{
		$this->apiParas['creative_ids'] = $creative_ids;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.creatives.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}