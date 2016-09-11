<?php
/**
 * TOP API: taobao.simba.keywords.realtime.ranking.get request
 * 
 * @author auto create
 * @since 1.0, 2015.09.14
 */
class SimbaKeywordsRealtimeRankingGetRequest
{
	/** 
	 * 推广组ID
	 **/
	private $adGroupId;
	
	/** 
	 * 出价值（单位：分，服务以此出价值作为实时排名的因素之一）
	 **/
	private $bidPrice;
	
	/** 
	 * 关键词ID
	 **/
	private $bidwordId;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdGroupId($adGroupId)
	{
		$this->adGroupId = $adGroupId;
		$this->apiParas["ad_group_id"] = $adGroupId;
	}

	public function getAdGroupId()
	{
		return $this->adGroupId;
	}

	public function setBidPrice($bidPrice)
	{
		$this->bidPrice = $bidPrice;
		$this->apiParas["bid_price"] = $bidPrice;
	}

	public function getBidPrice()
	{
		return $this->bidPrice;
	}

	public function setBidwordId($bidwordId)
	{
		$this->bidwordId = $bidwordId;
		$this->apiParas["bidword_id"] = $bidwordId;
	}

	public function getBidwordId()
	{
		return $this->bidwordId;
	}

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
		return "taobao.simba.keywords.realtime.ranking.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adGroupId,"adGroupId");
		RequestCheckUtil::checkNotNull($this->bidPrice,"bidPrice");
		RequestCheckUtil::checkNotNull($this->bidwordId,"bidwordId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
