<?php
class SimbaRptCampaignBaseGetRequest
{
	private $nick;
	private $campaign_id;
	private $start_time;
	private $end_time;
	private $source;
	private $subway_token;
	private $page_no;
	private $page_size;
	private $search_type;
	
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
		$this->apiParas['campaign_id'] = $campaign_id;
	}
	
	public function setStartTime($start_time)
	{
		$this->start_time = $start_time;
		$this->apiParas['start_time'] = $start_time;
	}
	
	public function getStartTime()
	{
		return $this->start_time;
	}
	
	public function setEndTime($end_time)
	{
		$this->end_time = $end_time;
		$this->apiParas['end_time'] = $end_time;
	}
	
	public function getEndTime()
	{
		return $this->end_time;
	}
	
	public function setSource($source)
	{
		$this->source = $source;
		$this->apiParas['source'] = $source;
	}
	
	public function getSource()
	{
		return $this->source;
	}
	
	public function setSubwayToken($subway_token)
	{
		$this->subway_token = $subway_token;
		$this->apiParas['subway_token'] = $subway_token;
	}
	
	public function getSubwayToken()
	{
		return $this->subway_token;
	}
	
	public function setPageNo($page_no)
	{
		$this->page_no = $page_no;
		$this->apiParas['page_no'] = $page_no;
	}
	
	public function getPageNo()
	{
		return $this->page_no;
	}
	
	public function setPageSize($page_size)
	{
		$this->page_size = $page_size;
		$this->apiParas['page_size'] = $page_size;
	}
	
	public function setSearchType($search_type)
	{
		$this->search_type = $search_type;
		$this->apiParas['search_type'] = $search_type;
	}
	
	public function getApiMethodName()
	{
		return "taobao.simba.rpt.campaignbase.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		RequestCheckUtil::checkNotNull($this->subway_token,"subway_token");
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
}