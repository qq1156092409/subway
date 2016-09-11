<?php
/**
 * TOP API: taobao.alitrip.travel.trades.sold.get request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelTradesSoldGetRequest
{
	/** 
	 * 买家昵称
	 **/
	private $buyerNick;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1
	 **/
	private $currentPage;
	
	/** 
	 * 查询交易创建时间结束。格式:yyyy-MM-dd HH:mm:ss
	 **/
	private $endCreated;
	
	/** 
	 * 每页条数。取值范围:大于零的整数; 默认值:40;最大值:100
	 **/
	private $pageSize;
	
	/** 
	 * 查询一个月内交易创建时间开始。格式:yyyy-MM-dd HH:mm:ss默认查询当前往前一个月的数据
	 **/
	private $startCreated;
	
	/** 
	 * 交易状态，WAIT_BUYER_PAY：等待买家付款WAIT_SELLER_SEND_GOODS：等待卖家发货SELLER_CONSIGNED_PART：卖家部分发货WAIT_BUYER_CONFIRM_GOODS：等待买家确认收货 TRADE_FINISHED：交易成功 TRADE_CLOSED：交易关闭 TRADE_CLOSED_BY_TAOBAO：交易被淘宝关闭 TRADE_NO_CREATE_PAY：没有创建外部交易（支付宝交易） PAY_PENDING：外卡支付付款确认中 ALL_WAIT_PAY：所有买家未付款的交易（包含：WAIT_BUYER_PAY、TRADE_NO_CREATE_PAY） ALL_CLOSED：所有关闭的交易（包含：TRADE_CLOSED、TRADE_CLOSED_BY_TAOBAO），默认查询所有交易状态的数据，除了默认值外每次只能查询一种状态。
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setBuyerNick($buyerNick)
	{
		$this->buyerNick = $buyerNick;
		$this->apiParas["buyer_nick"] = $buyerNick;
	}

	public function getBuyerNick()
	{
		return $this->buyerNick;
	}

	public function setCurrentPage($currentPage)
	{
		$this->currentPage = $currentPage;
		$this->apiParas["current_page"] = $currentPage;
	}

	public function getCurrentPage()
	{
		return $this->currentPage;
	}

	public function setEndCreated($endCreated)
	{
		$this->endCreated = $endCreated;
		$this->apiParas["end_created"] = $endCreated;
	}

	public function getEndCreated()
	{
		return $this->endCreated;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartCreated($startCreated)
	{
		$this->startCreated = $startCreated;
		$this->apiParas["start_created"] = $startCreated;
	}

	public function getStartCreated()
	{
		return $this->startCreated;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.trades.sold.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
