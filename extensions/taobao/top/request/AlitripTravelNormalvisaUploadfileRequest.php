<?php
/**
 * TOP API: taobao.alitrip.travel.normalvisa.uploadfile request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripTravelNormalvisaUploadfileRequest
{
	/** 
	 * 订单id
	 **/
	private $bizOrderId;
	
	/** 
	 * 文件
	 **/
	private $fileBytes;
	
	/** 
	 * 文件名：注意文件名请保证和上传的文件一直
	 **/
	private $fileName;
	
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

	public function setFileBytes($fileBytes)
	{
		$this->fileBytes = $fileBytes;
		$this->apiParas["file_bytes"] = $fileBytes;
	}

	public function getFileBytes()
	{
		return $this->fileBytes;
	}

	public function setFileName($fileName)
	{
		$this->fileName = $fileName;
		$this->apiParas["file_name"] = $fileName;
	}

	public function getFileName()
	{
		return $this->fileName;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.travel.normalvisa.uploadfile";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->bizOrderId,"bizOrderId");
		RequestCheckUtil::checkNotNull($this->fileBytes,"fileBytes");
		RequestCheckUtil::checkNotNull($this->fileName,"fileName");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
