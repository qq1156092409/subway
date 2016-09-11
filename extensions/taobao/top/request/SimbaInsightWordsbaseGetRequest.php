<?php
class SimbaInsightWordsbaseGetRequest{
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
   
	public function setWords($words)
	{
		$this->apiParas['words'] = $words;
	} 
	
	public function setTime($time)
	{
		$this->apiParas['time'] = $time;
	}
	
	public function setFilter($filter)
	{
		$this->apiParas['filter'] = $filter;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.insight.wordsbase.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}