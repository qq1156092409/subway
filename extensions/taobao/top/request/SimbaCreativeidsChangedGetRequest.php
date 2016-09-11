<?php
class SimbaCreativeidsChangedGetRequest
{
	private $apiParas = array();

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas['nick'] = $nick;
	}

	public function setStartTime($start_time)
	{
		$this->apiParas['start_time'] = $start_time;
	}

	public function setPagesize($page_size)
	{
		$this->apiParas['page_size'] = $page_size;
	}

	public function setPageno($page_no)
	{
		$this->apiParas['page_no'] = $page_no;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.creativeids.changed.get';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}