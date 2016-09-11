<?php
/**
 * TOP API: taobao.simba.adgroup.mobilediscount.delete request
 * 
 * @author auto create
 * @since 1.0, 2015.09.14
 */
class SimbaAdgroupMobilediscountDeleteRequest
{
	/** 
	 * adgroup主键数组
	 **/
	private $adgroupIds;
	
	/** 
	 * 昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setAdgroupIds($adgroupIds)
	{
		$this->adgroupIds = $adgroupIds;
		$this->apiParas["adgroup_ids"] = $adgroupIds;
	}

	public function getAdgroupIds()
	{
		return $this->adgroupIds;
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
		return "taobao.simba.adgroup.mobilediscount.delete";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->adgroupIds,"adgroupIds");
		RequestCheckUtil::checkMaxListSize($this->adgroupIds,20,"adgroupIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
