<?php
class SimbaCampaignsGetRequest{
	
	/** 
	 * 主人昵称
     **/
	private $nick;
	
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.campaigns.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		//RequestCheckUtil::checkNotNull($this->title,"title");
	}
	
	
}