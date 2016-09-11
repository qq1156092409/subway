<?php
class SimbaKeywordKeywordforecastGetRequest
{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}
	
	public function setKeywordId($keyword_id)
	{
		$this->apiParas['keyword_id'] = $keyword_id;
	}
	
	
	public function setBidwordPrice($bidword_price)
	{
		$this->apiParas['bidword_price'] = $bidword_price;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.keyword.keywordforecast.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}