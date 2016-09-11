<?php
/**
 * TOP API: taobao.alitrip.cruise.item.modify request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class AlitripCruiseItemModifyRequest
{
	/** 
	 * 行程晚数，必须大于0，且小于等于行程天数
	 **/
	private $accomNights;
	
	/** 
	 * 上架时间，商品上传后的状态。 可选值： 0为onsale(出售中)； 1为指定时间yyyy-MM-dd HH:mm； 2为仓库中； 不传默认为0，立即出售
	 **/
	private $approveStatus;
	
	/** 
	 * 预约商品开始时间； 格式：yyyy-MM-dd HH:mm 预约商品的时候需要填写
	 **/
	private $bcStartDate;
	
	/** 
	 * 叶子类目
	 **/
	private $cid;
	
	/** 
	 * 宝贝所在地市
	 **/
	private $city;
	
	/** 
	 * 日历价格库存
	 **/
	private $comboPriceCalendars;
	
	/** 
	 * 邮轮航线
	 **/
	private $cruiseIti;
	
	/** 
	 * 更多商品描述，不超过50000个字符
	 **/
	private $desc;
	
	/** 
	 * 至少提前天数，最晚成团提前天数，最小0天，最大为300天；不传则为0
	 **/
	private $duration;
	
	/** 
	 * 是否支持电子合同 0 表示不支持 1表示支持
	 **/
	private $electronic;
	
	/** 
	 * 支持宝贝信息的删除，各个参数的名称之间用【,】分割, 如果对应的参数有设置过值，即使在这个列表中，也不会被删除; 目前支持此功能的宝贝信息如下：locality_life表示删除电子凭证，merchant表示删除码商信息，refund_ratio表示删除电子凭证退款比例，network_id表示删除电子凭证网点信息,seller_cids表示删除关联店铺类目，outer_id表示删除商家外部编码，second_kill表示删除秒杀信息，input_pids表示删除用户自定义属性
	 **/
	private $emptyFields;
	
	/** 
	 * 可选出发结束日期，格式：年-月-日 日期必须是最近300天内的，最早和最晚日期跨度最大为90天
	 **/
	private $endComboDate;
	
	/** 
	 * 邮轮包含元素
	 **/
	private $feeCruiseInclude;
	
	/** 
	 * 费用不包含，1500个字符以内
	 **/
	private $feeExclude;
	
	/** 
	 * 费用包含，1500个字符以内；仅跟团游类目需要填写
	 **/
	private $feeInclude;
	
	/** 
	 * 上船地点，填写中文，必须对应类目下存在的上船地点，上船地点仅限一个
	 **/
	private $fromLocation;
	
	/** 
	 * 是否支持电子凭证，0为不支持，1为支持；默认为0不支持
	 **/
	private $hasDiscount;
	
	/** 
	 * 是否提供发票 默认为false  仅C商家需要设置该值 B商家强制提供发票
	 **/
	private $hasInvoice;
	
	/** 
	 * 是否橱窗推荐，可选值：true，false；默认值：false(不推荐)，B商家不用设置该字段，均为true
	 **/
	private $hasShowcase;
	
	/** 
	 * 商品主图。类型:JPG,GIF;最大长度:500k，支持的文件类型：gif,jpg,jpeg,png。请区别于pic_path,image可以上传本地图片，而pic_path只能指定用户图片空间的图片（“卖家中心-图片空间”）。接口只支持上传一张主图。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
	 **/
	private $image;
	
	/** 
	 * 是否支持电子凭证 0为不支持 1为支持
	 **/
	private $isSupportECert;
	
	/** 
	 * 商品id
	 **/
	private $itemId;
	
	/** 
	 * 商品上架日期，格式：yyyy-MM-dd HH:mm
	 **/
	private $itemStartDate;
	
	/** 
	 * 行程描述 类型为数组，第一个元素对应第一天行程，以此类推
	 **/
	private $itinerarys;
	
	/** 
	 * 下船地点
	 **/
	private $landingCity;
	
	/** 
	 * 电子凭证码商，格式为：码商id:nick。
	 **/
	private $merchant;
	
	/** 
	 * 网点ID
	 **/
	private $networkId;
	
	/** 
	 * 预定须知，1500个字符以内
	 **/
	private $orderInfo;
	
	/** 
	 * 核销放行码商id
	 **/
	private $outerId;
	
	/** 
	 * 商品主图-图片空间，商品主图需要关联的图片空间的相对url。这个url所对应的图片必须要属于当前用户。pic_path和image只需要传入一个,如果两个都传，默认选择pic_path
	 **/
	private $picPath;
	
	/** 
	 * 宝贝所在地省份
	 **/
	private $prov;
	
	/** 
	 * 退改规则 1）格式：标准规则 或 自定义规则：a_a_num,a_b_num,b-1_c_num,c-1_c-1_num 2）规则：自定义规则里最多可含5组规则
	 **/
	private $refundRegulations;
	
	/** 
	 * 退改规则类型，0为标准，1为自定义 不传，默认为0
	 **/
	private $refundType;
	
	/** 
	 * 商品售卖类型，0为普通商品，1为预约商品；默认为0
	 **/
	private $saletype;
	
	/** 
	 * 商品秒杀，商品秒杀三个值：可选类型web_only(只能通过web网络秒杀)，wap_only(只能通过wap网络秒杀)，web_and_wap(既能通过web秒杀也能通过wap秒杀)。
	 **/
	private $secondKill;
	
	/** 
	 * 关联商品与店铺类目 结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。 支持最大长度为：256 支持的最大列表长度为：256
	 **/
	private $sellerCids;
	
	/** 
	 * 邮轮公司
	 **/
	private $shipCompany;
	
	/** 
	 * 邮轮编码
	 **/
	private $shipName;
	
	/** 
	 * 可选出发开始日期，格式：年-月-日
	 **/
	private $startComboDate;
	
	/** 
	 * 亮点1，35个字符以内
	 **/
	private $sub1Title;
	
	/** 
	 * 亮点2，35个字符以内
	 **/
	private $sub2Title;
	
	/** 
	 * 亮点3，35个字符以内
	 **/
	private $sub3Title;
	
	/** 
	 * 亮点4，35个字符以内
	 **/
	private $sub4Title;
	
	/** 
	 * 存计数，0拍下减库存，1付款减库存；不传的话 (默认)不更改，集市卖家默认拍下减库存；商城卖家默认付款减库存。
	 **/
	private $subStock;
	
	/** 
	 * 商品标题，30个字符以内
	 **/
	private $title;
	
	/** 
	 * 目的地（城市或国家），填写中文，必须对应类目下存在的目的地，目的地最多12个，目的地之间用英文逗号“,”隔开
	 **/
	private $toLocations;
	
	/** 
	 * 行程天数，必须大于0
	 **/
	private $tripDays;
	
	private $apiParas = array();
	
	public function setAccomNights($accomNights)
	{
		$this->accomNights = $accomNights;
		$this->apiParas["accom_nights"] = $accomNights;
	}

	public function getAccomNights()
	{
		return $this->accomNights;
	}

	public function setApproveStatus($approveStatus)
	{
		$this->approveStatus = $approveStatus;
		$this->apiParas["approve_status"] = $approveStatus;
	}

	public function getApproveStatus()
	{
		return $this->approveStatus;
	}

	public function setBcStartDate($bcStartDate)
	{
		$this->bcStartDate = $bcStartDate;
		$this->apiParas["bc_start_date"] = $bcStartDate;
	}

	public function getBcStartDate()
	{
		return $this->bcStartDate;
	}

	public function setCid($cid)
	{
		$this->cid = $cid;
		$this->apiParas["cid"] = $cid;
	}

	public function getCid()
	{
		return $this->cid;
	}

	public function setCity($city)
	{
		$this->city = $city;
		$this->apiParas["city"] = $city;
	}

	public function getCity()
	{
		return $this->city;
	}

	public function setComboPriceCalendars($comboPriceCalendars)
	{
		$this->comboPriceCalendars = $comboPriceCalendars;
		$this->apiParas["combo_price_calendars"] = $comboPriceCalendars;
	}

	public function getComboPriceCalendars()
	{
		return $this->comboPriceCalendars;
	}

	public function setCruiseIti($cruiseIti)
	{
		$this->cruiseIti = $cruiseIti;
		$this->apiParas["cruise_iti"] = $cruiseIti;
	}

	public function getCruiseIti()
	{
		return $this->cruiseIti;
	}

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setDuration($duration)
	{
		$this->duration = $duration;
		$this->apiParas["duration"] = $duration;
	}

	public function getDuration()
	{
		return $this->duration;
	}

	public function setElectronic($electronic)
	{
		$this->electronic = $electronic;
		$this->apiParas["electronic"] = $electronic;
	}

	public function getElectronic()
	{
		return $this->electronic;
	}

	public function setEmptyFields($emptyFields)
	{
		$this->emptyFields = $emptyFields;
		$this->apiParas["empty_fields"] = $emptyFields;
	}

	public function getEmptyFields()
	{
		return $this->emptyFields;
	}

	public function setEndComboDate($endComboDate)
	{
		$this->endComboDate = $endComboDate;
		$this->apiParas["end_combo_date"] = $endComboDate;
	}

	public function getEndComboDate()
	{
		return $this->endComboDate;
	}

	public function setFeeCruiseInclude($feeCruiseInclude)
	{
		$this->feeCruiseInclude = $feeCruiseInclude;
		$this->apiParas["fee_cruise_include"] = $feeCruiseInclude;
	}

	public function getFeeCruiseInclude()
	{
		return $this->feeCruiseInclude;
	}

	public function setFeeExclude($feeExclude)
	{
		$this->feeExclude = $feeExclude;
		$this->apiParas["fee_exclude"] = $feeExclude;
	}

	public function getFeeExclude()
	{
		return $this->feeExclude;
	}

	public function setFeeInclude($feeInclude)
	{
		$this->feeInclude = $feeInclude;
		$this->apiParas["fee_include"] = $feeInclude;
	}

	public function getFeeInclude()
	{
		return $this->feeInclude;
	}

	public function setFromLocation($fromLocation)
	{
		$this->fromLocation = $fromLocation;
		$this->apiParas["from_location"] = $fromLocation;
	}

	public function getFromLocation()
	{
		return $this->fromLocation;
	}

	public function setHasDiscount($hasDiscount)
	{
		$this->hasDiscount = $hasDiscount;
		$this->apiParas["has_discount"] = $hasDiscount;
	}

	public function getHasDiscount()
	{
		return $this->hasDiscount;
	}

	public function setHasInvoice($hasInvoice)
	{
		$this->hasInvoice = $hasInvoice;
		$this->apiParas["has_invoice"] = $hasInvoice;
	}

	public function getHasInvoice()
	{
		return $this->hasInvoice;
	}

	public function setHasShowcase($hasShowcase)
	{
		$this->hasShowcase = $hasShowcase;
		$this->apiParas["has_showcase"] = $hasShowcase;
	}

	public function getHasShowcase()
	{
		return $this->hasShowcase;
	}

	public function setImage($image)
	{
		$this->image = $image;
		$this->apiParas["image"] = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setIsSupportECert($isSupportECert)
	{
		$this->isSupportECert = $isSupportECert;
		$this->apiParas["is_support_e_cert"] = $isSupportECert;
	}

	public function getIsSupportECert()
	{
		return $this->isSupportECert;
	}

	public function setItemId($itemId)
	{
		$this->itemId = $itemId;
		$this->apiParas["item_id"] = $itemId;
	}

	public function getItemId()
	{
		return $this->itemId;
	}

	public function setItemStartDate($itemStartDate)
	{
		$this->itemStartDate = $itemStartDate;
		$this->apiParas["item_start_date"] = $itemStartDate;
	}

	public function getItemStartDate()
	{
		return $this->itemStartDate;
	}

	public function setItinerarys($itinerarys)
	{
		$this->itinerarys = $itinerarys;
		$this->apiParas["itinerarys"] = $itinerarys;
	}

	public function getItinerarys()
	{
		return $this->itinerarys;
	}

	public function setLandingCity($landingCity)
	{
		$this->landingCity = $landingCity;
		$this->apiParas["landing_city"] = $landingCity;
	}

	public function getLandingCity()
	{
		return $this->landingCity;
	}

	public function setMerchant($merchant)
	{
		$this->merchant = $merchant;
		$this->apiParas["merchant"] = $merchant;
	}

	public function getMerchant()
	{
		return $this->merchant;
	}

	public function setNetworkId($networkId)
	{
		$this->networkId = $networkId;
		$this->apiParas["network_id"] = $networkId;
	}

	public function getNetworkId()
	{
		return $this->networkId;
	}

	public function setOrderInfo($orderInfo)
	{
		$this->orderInfo = $orderInfo;
		$this->apiParas["order_info"] = $orderInfo;
	}

	public function getOrderInfo()
	{
		return $this->orderInfo;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
	}

	public function setPicPath($picPath)
	{
		$this->picPath = $picPath;
		$this->apiParas["pic_path"] = $picPath;
	}

	public function getPicPath()
	{
		return $this->picPath;
	}

	public function setProv($prov)
	{
		$this->prov = $prov;
		$this->apiParas["prov"] = $prov;
	}

	public function getProv()
	{
		return $this->prov;
	}

	public function setRefundRegulations($refundRegulations)
	{
		$this->refundRegulations = $refundRegulations;
		$this->apiParas["refund_regulations"] = $refundRegulations;
	}

	public function getRefundRegulations()
	{
		return $this->refundRegulations;
	}

	public function setRefundType($refundType)
	{
		$this->refundType = $refundType;
		$this->apiParas["refund_type"] = $refundType;
	}

	public function getRefundType()
	{
		return $this->refundType;
	}

	public function setSaletype($saletype)
	{
		$this->saletype = $saletype;
		$this->apiParas["saletype"] = $saletype;
	}

	public function getSaletype()
	{
		return $this->saletype;
	}

	public function setSecondKill($secondKill)
	{
		$this->secondKill = $secondKill;
		$this->apiParas["second_kill"] = $secondKill;
	}

	public function getSecondKill()
	{
		return $this->secondKill;
	}

	public function setSellerCids($sellerCids)
	{
		$this->sellerCids = $sellerCids;
		$this->apiParas["seller_cids"] = $sellerCids;
	}

	public function getSellerCids()
	{
		return $this->sellerCids;
	}

	public function setShipCompany($shipCompany)
	{
		$this->shipCompany = $shipCompany;
		$this->apiParas["ship_company"] = $shipCompany;
	}

	public function getShipCompany()
	{
		return $this->shipCompany;
	}

	public function setShipName($shipName)
	{
		$this->shipName = $shipName;
		$this->apiParas["ship_name"] = $shipName;
	}

	public function getShipName()
	{
		return $this->shipName;
	}

	public function setStartComboDate($startComboDate)
	{
		$this->startComboDate = $startComboDate;
		$this->apiParas["start_combo_date"] = $startComboDate;
	}

	public function getStartComboDate()
	{
		return $this->startComboDate;
	}

	public function setSub1Title($sub1Title)
	{
		$this->sub1Title = $sub1Title;
		$this->apiParas["sub1_title"] = $sub1Title;
	}

	public function getSub1Title()
	{
		return $this->sub1Title;
	}

	public function setSub2Title($sub2Title)
	{
		$this->sub2Title = $sub2Title;
		$this->apiParas["sub2_title"] = $sub2Title;
	}

	public function getSub2Title()
	{
		return $this->sub2Title;
	}

	public function setSub3Title($sub3Title)
	{
		$this->sub3Title = $sub3Title;
		$this->apiParas["sub3_title"] = $sub3Title;
	}

	public function getSub3Title()
	{
		return $this->sub3Title;
	}

	public function setSub4Title($sub4Title)
	{
		$this->sub4Title = $sub4Title;
		$this->apiParas["sub4_title"] = $sub4Title;
	}

	public function getSub4Title()
	{
		return $this->sub4Title;
	}

	public function setSubStock($subStock)
	{
		$this->subStock = $subStock;
		$this->apiParas["sub_stock"] = $subStock;
	}

	public function getSubStock()
	{
		return $this->subStock;
	}

	public function setTitle($title)
	{
		$this->title = $title;
		$this->apiParas["title"] = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function setToLocations($toLocations)
	{
		$this->toLocations = $toLocations;
		$this->apiParas["to_locations"] = $toLocations;
	}

	public function getToLocations()
	{
		return $this->toLocations;
	}

	public function setTripDays($tripDays)
	{
		$this->tripDays = $tripDays;
		$this->apiParas["trip_days"] = $tripDays;
	}

	public function getTripDays()
	{
		return $this->tripDays;
	}

	public function getApiMethodName()
	{
		return "taobao.alitrip.cruise.item.modify";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkMaxListSize($this->feeCruiseInclude,20,"feeCruiseInclude");
		RequestCheckUtil::checkNotNull($this->itemId,"itemId");
		RequestCheckUtil::checkMaxListSize($this->refundRegulations,20,"refundRegulations");
		RequestCheckUtil::checkMaxListSize($this->sellerCids,20,"sellerCids");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
