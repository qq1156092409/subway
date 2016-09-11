<?php
class SimbaInsightWordscatsGetRequest  
{
	private $apiParas = array();
	private $nick;
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}
	
	
	public function getNick()
	{
		return $this->nick;
	}
	
   	public function setWordCategories($word_categories)
	{
		$this->apiParas['word_categories'] = $word_categories;
	}
	
	
  	public function setFilter($filter)
	{
		$this->apiParas['filter'] = $filter;
	}
	
	
	public function getApiMethodName()
	{
		return 'taobao.simba.insight.wordscats.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}