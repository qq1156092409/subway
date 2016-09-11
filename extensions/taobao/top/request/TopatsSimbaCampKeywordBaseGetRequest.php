<?php
class TopatsSimbaCampKeywordBaseGetRequest {
	private $apiParas = array();
	
	private $campaign_id;
	
	private $time_slot;
	
	private $search_type;
	
	private $source;
	
	private $nick;
	
	public function setCampaignId($campaign_id)
	{
		$this->campaign_id = $campaign_id;
		$this->apiParas['campaign_id'] = $campaign_id;
	}
	
	public function setTimeSlot($time_slot)
	{
		$this->time_slot = $time_slot;
		$this->apiParas['time_slot'] = $time_slot;
	}
	
	public function setSearchType($search_type)
	{
		$this->search_type = $search_type;
		$this->apiParas['search_type'] = $search_type;
	}
	
	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas['source'] = $source;
	}
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{		
		
	}
	
	public function getApiMethodName()
	{
		return "taobao.topats.simba.campkeywordbase.get";
	}
	
}