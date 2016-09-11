<?php
class SimbaKeywordsDeleteRequest
{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}
	
	public function setCampaignId($campaign_id)
	{
		$this->apiParas['campaign_id'] = $campaign_id;
	}
	
	
	public function setKeywordIds($adgroup_ids)
	{
		$this->apiParas['keyword_ids'] = $adgroup_ids;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.keywords.delete';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}