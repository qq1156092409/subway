<?php
class SimbaAdgroupAddRequest
{
	private $apiParas = array();

	public function setNick($nick)
	{
		$this->apiParas['nick'] = $nick;
	}

	public function setCampaignId($compaign_id)
	{
		$this->apiParas['campaign_id'] = $compaign_id;
	}

	public function setItemid($item_id)
	{
		$this->apiParas['item_id'] = $item_id;
	}

	public function setDefault_price($default_price)
	{
	    $this->apiParas['default_price'] = $default_price;
	}

	public function setTitle($title)
	{
		$this->apiParas['title'] = $title;
	}

	public function setImgurl($img_url)
	{
		$this->apiParas['img_url'] = $img_url;
	}

	public function setAdgroupIds($adgroup_ids)
	{
		$this->apiParas['adgroup_ids'] = $adgroup_ids;
	}

	public function getApiMethodName()
	{
		return 'taobao.simba.adgroup.add';
	}

	public function getApiParas()
	{
		return $this->apiParas;
	}

	public function check()
	{
	}
}