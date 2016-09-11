<?php
class SimbaAdgroupNonsearchstatesUpdateRequest
{
	private $apiParas = array();
	private $nick;
	private $campaign_id;	
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
	
	public function setCampaignId($campaign_id)
	{
		$this->campaign_id  = $campaign_id ;
		$this->apiParas['campaign_id'] = $campaign_id;
	}
	
	public function getNick()
	{
		return $this->nick;
	}
	
	public function setAdgroupid_nonsearchstate_json ($json){
	  $this->apiParas['adgroupid_nonsearchstate_json'] = $json;
	}
	
	
	public function getApiMethodName()
	{
		return 'taobao.simba.adgroup.nonsearchstates.update';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}