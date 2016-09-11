<?php
/**
 * TOP API: taobao.alitrip.travel.book.notice request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelBookNoticeRequest
{
	/** 
	 * 订单号
	 **/
	private $bizOrderId;
	
	/** 
	 * 业务类型，0-度假，1-机票
	 **/
	private $bizType;
	
	/** 
	 * 通知内容，k/v格式，key指定可以使用的，范围外的不处理
	 **/
	private $contents;
	
	/** 
	 * 延迟发送的时间（单位秒）
	 **/
	private $delay;
	
	/** 
	 * 消息类型 0-短信,1-旺旺
	 **/
	private $messageType;
	
	/** 
	 * 使用的模板，使用前需要与开发沟通
	 **/
	private $templateId;
	
	private $apiParas = array();
	
	public function setBizOrderId($bizOrderId)
	{
		$this->bizOrderId = $bizOrderId;
		$this->apiParas["biz_order_id"] = $bizOrderId;
	}

	public function getBizOrderId()
	{
		return $this->bizOrderId;
	}

	public function setBizType($bizType)
	{
		$this->bizType = $bizType;
		$this->apiParas["biz_type"] = $bizType;
	}

	public function getBizType()
	{
		return $this->bizType;
	}

	public function setContents($contents)
	{
		$this->contents = $contents;
		$this->apiParas["contents"] = $contents;
	}

	public function getContents()
	{
		return $this->contents;
	}

	public function setDelay($delay)
	{
		$this->delay = $delay;
		$this->apiParas["delay"] = $delay;
	}

	public function getDelay()
	{
		return $this->delay;
	}

	public function setMessageType($messageType)
	{
		$this->messageType = $messageType;
		$this->apiParas["message_type"] = $messageType;
	}

	public function getMessageType()
	{
		return $this->messageType;
	}

	public function setTemplateId($templateId)
	{
		$this->templateId = $templateId;
		$this->apiParas["template_id"] = $templateId;
	}

	public function getTemplateId()
	{
		return $this->templateId;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.book.notice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->bizType,"bizType");
		RequestCheckUtil::checkNotNull($this->delay,"delay");
		RequestCheckUtil::checkNotNull($this->messageType,"messageType");
		RequestCheckUtil::checkNotNull($this->templateId,"templateId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
