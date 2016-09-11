<?php

/**
 * 
 * 增加创意
 * @author oShine
 *
 */

class SimbaCreativeAddRequest{
	
	private $apiParas = array();

	public function setNick($nick)
	{		
		$this->apiParas['nick'] = $nick;
	}

	public function setAdgroupId($adgroup_id)
	{
		$this->apiParas['adgroup_id'] = $adgroup_id;
	}

	public function setTitle($title)
	{
		$this->apiParas['title'] = $title;
	}

	public function setImgUrl($img_url)
	{
		$this->apiParas['img_url'] = $img_url;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.creative.add';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}