<?php
/**
 * TOP API: taobao.simba.adgroup.onlineitems.get  request
 */
class SimbaAdgroupOnlineitemsGetRequest
{

	private $nick;
	private $order_field;
	private $order_by;
	private $page_size;
	private $page_no;


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

	public function setOrderfield($order_field)
	{
		$this->order_field = $order_field;
		$this->apiParas["order_field"] = $order_field;
	}

	public function getOrderfield()
	{
		return $this->order_field;
	}


	public function setOrderby($order_by)
	{
		$this->order_by = $order_by;
		$this->apiParas["order_by"] = $order_by;
	}

	public function getOrderby()
	{
		return $this->order_by;
	}



	public function getPagesize()
	{
		return $this->page_size;
	}


	public function setPagesize($page_size)
	{
		$this->page_size = $page_size;
		$this->apiParas["page_size"] = $page_size;
	}


	public function setPageno($page_no)
	{
		$this->page_no = $page_no;
		$this->apiParas["page_no"] = $page_no;
	}



	public function getPageno()
	{
		return $this->page_no;
	}



	public function getApiMethodName()
	{
		return "taobao.simba.adgroup.onlineitems.get";
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
		RequestCheckUtil::checkNotNull($this->nick,"nick");
	}
}