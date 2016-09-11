<?php
class SimbaAdgroupsUpdateRequest
{
	private $apiParas = array();

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}

	public function setAdgroupId($adgroup_id)
	{
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}

	public function setDefaultprice($default_price)
	{
		$this->apiParas['default_price'] = $default_price;
	}
	public function setNonsearchMaxPrice($nonsearch_max_price)
	{
		$this->apiParas['nonsearch_max_price'] = $nonsearch_max_price;
	}

	public function setUseNonsearchDefaultPrice($use_nonsearch_default_price)
	{
		$this->apiParas['use_nonsearch_default_price'] = $use_nonsearch_default_price;
	}

	public function setOnlineStatus($online_status)
	{
		$this->apiParas['online_status'] = $online_status;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.adgroup.update';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}