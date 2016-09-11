<?php
class SimbaKeywordsvonAddRequest
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
	
	
	public function setKeywordPrices($keyword_prices)
	{ 	
		$this->apiParas['keyword_prices'] = $keyword_prices;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.keywordsvon.add';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
	
}
