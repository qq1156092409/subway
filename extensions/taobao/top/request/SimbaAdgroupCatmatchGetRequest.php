<?php
class SimbaAdgroupCatmatchGetRequest
{
	private $apiParas = array();
	private $nick;
	private $adgroup_id;	
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
	
	public function setAdgroupId($adgroup_id)
	{
		$this->adgroup_id = $adgroup_id;
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}
	
	public function getNick()
	{
		return $this->nick;
	}
	
	public function getAdgroupId()
	{
		return $this->adgroup_id;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.adgroup.catmatch.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}