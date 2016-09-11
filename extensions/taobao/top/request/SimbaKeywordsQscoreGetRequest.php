<?php
class SimbaKeywordsQscoreGetRequest{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}
	
	public function setAdgroupId($adgroup_id)
	{
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.keywords.qscore.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		//RequestCheckUtil::checkNotNull($value, $fieldName);
	}
} 