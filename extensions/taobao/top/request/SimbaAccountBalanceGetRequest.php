<?php
class SimbaAccountBalanceGetRequest
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
	
	
	
	public function getApiMethodName()
	{
		return 'taobao.simba.account.balance.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}