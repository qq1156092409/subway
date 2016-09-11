<?php
class SimbaKeywordsRecommendGetRequest
{
	private $apiParas = array();

	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}

	public function setAdgroupid($adgroup_id)
	{
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}


	public function setSearch($search)
	{
		$this->apiParas['search'] = $search;
	}

	public function setPertinence($pertinence)
	{
		$this->apiParas['pertinence'] = $pertinence;
	}

	public function setPagesize($page_size)
	{
		$this->apiParas['page_size'] = $page_size;
	}

	public function setPageno($page_no)
	{
		$this->apiParas['page_no'] = $page_no;
	}

	public function setOrderby($order_by)
	{
		$this->apiParas['order_by'] = $order_by;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.keywords.recommend.get';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}