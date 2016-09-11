<?php
class SimbaToolsItemsTopGetRequest
{
	private $apiParas = array();
	private $nick;
	private $keyword;
	private $ip;

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}

	public function setKeyword($keyword)
	{
		$this->keyword = $keyword;
		$this->apiParas['keyword'] = $keyword;
	}

	public function setIp($ip)
	{
		$this->ip = $ip;
		$this->apiParas['ip'] = $ip;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getKeyword()
	{
		return $this->keyword;
	}
	
	public function getIp()
	{
		return $this->ip;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.tools.items.top.get';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}
