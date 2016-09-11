<?php
class SimbaAdgroupCatmatchUpdateRequest
{
	private $apiParas = array();
	private $nick;
	private $adgroup_id;
	private $catmatch_id;
	private $max_price;
	private $use_default_price;
	private $online_status;
	

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

	public function setCatmatchId($catmatch_id)
	{
		$this->catmatch_id = $catmatch_id;
		$this->apiParas['catmatch_id'] = $catmatch_id;
	}

	public function setMaxPrice($max_price)
	{
		$this->max_price = $max_price;
		$this->apiParas['max_price'] = $max_price;
	}

	public function setUseDefaultPrice($use_default_price)
	{
		$this->use_default_price = $use_default_price;
		$this->apiParas['use_default_price'] = $use_default_price;
	}

	public function setOnlineStatus($online_status)
	{
		$this->online_status = $online_status;
		$this->apiParas['online_status'] = $online_status;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.adgroup.catmatch.update';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}