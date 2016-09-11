<?php
class SimbaAdgroupCatmatchsGetRequest
{
	private $apiParas = array();
	private $nick;
	private $adgroup_ids;	
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
	
	public function setAdgroupIds($adgroup_ids)
	{
		$this->adgroup_ids = $adgroup_ids;
		$this->apiParas['adgroup_ids'] = $adgroup_ids;
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
		return 'taobao.simba.adgroup.adgroupcatmatchs.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}