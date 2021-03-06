<?php
/**
 * TOP API: taobao.topats.delivery.send request
 * 
 * @author auto create
 * @since 1.0, 2011-09-29 15:36:21
 */
class SimbaCampaignAddRequest
{
	/** 
	 * 主人昵称
     **/
	private $nick;
	
	/** 
	 * 推广计划名称，不能多余20个汉字，不能和客户其他推广计划同名
	 **/
	private $title;
	
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

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getApiMethodName()
	{
		return "taobao.simba.campaign.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->title,"title");
	}
}
