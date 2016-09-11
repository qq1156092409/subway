<?php
class SimbaInsightWordsAnalysisGetRequest
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
	
   public function setWords($words)
	{
		$this->apiParas['words'] = $words;
	}
	
	
  public function setStu($stu)
	{
		$this->apiParas['stu'] = $stu;
	}
	
	
	public function getApiMethodName()
	{
		return 'taobao.simba.insight.wordsanalysis.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}