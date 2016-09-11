<?php
class SimbaAdgroupsGetRequest
{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
	
	public function setCampaignId($compaign_id)
	{
		$this->apiParas['campaign_id'] = $compaign_id;
	}
	
	public function setPageSize($page_size)
	{
		$this->apiParas['page_size'] = $page_size;
	}
	
	public function setPageNo($page_no)
	{
		$this->apiParas['page_no'] = $page_no;
	}
	
	public function setAdgroupIds($adgroup_ids)
	{
		$this->apiParas['adgroup_ids'] = $adgroup_ids;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.adgroups.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}