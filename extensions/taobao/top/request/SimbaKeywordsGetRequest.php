<?php
class SimbaKeywordsGetRequest
{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}
	
	public function setAdgroupId($adgroup_id)
	{
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}
	
	
	public function setKeywordIds($keyword_ids)
	{
		$this->apiParas['keyword_ids'] = $keyword_ids;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.keywords.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}