<?php
/**
 * TOP API: taobao.simba.campaign.platform.get 
 *
 */
class SimbaCampaignPlatformGetRequest
{
	/** 
	 * 主人昵称
     **/
	private $nick;
	
	/** 
	 * 推广计划ID
	 **/
	private $campaign_id;
	
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function setCampaignId($campaign_id)
	{
		$this->campaign_id = $campaign_id;
		$this->apiParas["campaign_id"] = $campaign_id;
	}

	public function getCampaignId()
	{
		return $this->campaign_id;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.campaign.platform.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
}
