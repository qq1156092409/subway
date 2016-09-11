<?php
class SimbaAdgroupDeletedCatmatchidsGetRequest
{
	private $apiParas = array();
	
	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}
	
	public function setStarttime($start_time)
	{
		$this->apiParas['start_time'] = $start_time;
	}
	
	
	public function setPageSize($page_size)
	{
		$this->apiParas['page_size'] = $page_size;
	}
	
	
	public function setPageNo($page_no)
	{
		$this->apiParas['page_no'] = $page_no;
	}
	
	public function getApiMethodName()
	{
		return 'taobao.simba.catmatchids.deleted.get';
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
	}
}