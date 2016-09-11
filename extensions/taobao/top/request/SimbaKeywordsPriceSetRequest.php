<?php
class SimbaKeywordsPriceSetRequest
{

	private $apiParas = array();

	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}

	public function setAdgroupId($adgroup_id)
	{
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}

	public function setKeywordPrices($keyword_prices)
	{
		$this->apiParas['keywordid_prices'] = $keyword_prices;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.keywords.price.set';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}

}
