<?php
/**
 * TOP API: taobao.travel.item.add request
 * 
 * @author auto create
 * @since 1.0, 2016.06.27
 */
class TravelItemAddRequest
{
	/** 
	 * 行程晚数，必须大于0，且小于等于行程天数 这里注意下，trip_days（行程天数）>=accom_nights（行程晚数）>=hotel_days（住宿晚数）
	 **/
	private $accomNights;
	
	/** 
	 * 上架时间，商品上传后的状态。 可选值： 0为onsale(出售中)； 1为指定时间yyyy-MM-dd HH:mm； 2为仓库中； 不传默认为0，立即出售;注意：approve_status设置为1的时候，item_start_date如果不传则宝贝会 变成立即销售
	 **/
	private $approveStatus;
	
	/** 
	 * 核销放行码商id
	 **/
	private $authMerchantId;
	
	/** 
	 * 回程交通，仅限跟团游填写且跟团游必填； 回程交通（1-飞机，2- 高铁或动车， 3-汽车，4-游船，100-其他）
	 **/
	private $backTrafficType;
	
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
	 * 日历价格库存 套餐的价格日历跨度不能超过180天,系统会根据duration过滤combo_price_calendars，只显示（当前日期+duration）之后的日历库存。若当前日期是5月12日，duration设置为14，则系统只会显示5月26日之后的价格日历库存。若combo_price_calendars不包含5月26日之后的库存，则发布报错无有效日历库存
	 **/
	private $comboPriceCalendars;
	
	/** 
	 * 更多商品描述，不超过50000个字符
	 **/
	private $desc;
	
	/** 
	 * 餐饮信息，1500个字符以内 仅自由行填写 费用包含中 大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用填写必须大于等于其中两项
	 **/
	private $diningDesc;
	
	/** 
	 * 至少提前天数，最晚成团提前天数，最小0天，最大为300天；不传则为0
	 **/
	private $duration;
	
	/** 
	 * 是否支持电子合同
	 **/
	private $electronic;
	
	/** 
	 * 可选出发结束日期，格式：年-月-日 日期必须是最近300天内的，最早和最晚日期跨度最大为90天
	 **/
	private $endComboDate;
	
	/** 
	 * 必填。费用不包含，1500个字符以内
	 **/
	private $feeExclude;
	
	/** 
	 * 费用包含，1500个字符以内；仅跟团游类目需要填写且跟团游必填
	 **/
	private $feeInclude;
	
	/** 
	 * 所有线路游商品必填。出发地（城市），填写中文，必须对应类目下存在的出发地，出发地仅限一个;如果提示出发地不存在，请通过http://bangpai.taobao.com/group/thread/14051111-280945273.htm?spm=181.7626211.1998314043.19.JuwBlh这个链接进行申请 ！出发地数据可以根据类目属性接口来查看，链接：http://api.taobao.com/apidoc/api.htm?path=cid:20280-apiId:21802
	 **/
	private $fromLocation;
	
	/** 
	 * 去程交通，仅限跟团游填写且跟团游必填； 去程交通（1-飞机，2- 高铁或动车， 3-汽车，4-游船，100-其他）
	 **/
	private $goTrafficType;
	
	/** 
	 * 支持会员打折。可选值：true，false;默认值：false(不打折)。不传的话默认为true
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
	 * 住宿晚数，小于或等于行程晚数，且必须大于0
	 **/
	private $hotelDays;
	
	/** 
	 * 酒店说明，1500个字符以内 仅自由行填写
	 **/
	private $hotelDesc;
	
	/** 
	 * 酒店信息 仅限自由行填写 费用包含中 大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用填写必须大于等于其中两项
	 **/
	private $hotelInfos;
	
	/** 
	 * 商品主图。类型:JPG,GIF;最大长度:500k，支持的文件类型：gif,jpg,jpeg,png。请区别于pic_path,image可以上传本地图片，而pic_path只能指定用户图片空间的图片（“卖家中心-图片空间”）。接口只支持上传一张主图。pic_path和image二者请至少传入一个，且只需要传入一个,如果两个都传，默认选择pic_path作为商品主图
	 **/
	private $image;
	
	/** 
	 * 保险信息，1500个字符以内 仅自由行填写 费用包含中 大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用填写必须大于等于其中两项
	 **/
	private $insuranceDesc;
	
	/** 
	 * 是否支持电子凭证 0为不支持 1为支持
	 **/
	private $isSupportECert;
	
	/** 
	 * 商品id 仅编辑接口需要传
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
	 * 电子凭证码商，格式为：码商id:nick。 "1. 商家必须是电子凭证卖家才能发布电子凭证商品。参考链接 http://bangpai.taobao.com/group/thread/14051111-283426841.htm?spm=0.0.0.0.TRlt53  2. 发布电子凭证商品，merchant字段必填。若为淘宝发码，则merchant设置为 0:淘宝 3. network_id联系码商提供"
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
	 * 其他费用信息，1500个字符以内 仅自由行填写 费用包含中 大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用填写必须大于等于其中两项
	 **/
	private $otherCostDesc;
	
	/** 
	 * 商品级别的商家编码，商家的外部编码，最大为512字节
	 **/
	private $outerId;
	
	/** 
	 * 商品主图-图片空间，商品主图需要关联的图片空间的绝对url。这个url所对应的图片必须要属于当前用户。pic_path和image二者请至少传入一个，且只需要传入一个,如果两个都传，默认选择pic_path作为商品主图
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
	 * 退改规则类型，0为标准，1为自定义 2为不支持退改规则  不传，默认为0
	 **/
	private $refundType;
	
	/** 
	 * 租车信息，1500个字符以内 仅自由行填写 费用包含中 大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用填写必须大于等于其中两项
	 **/
	private $rentalCarDesc;
	
	/** 
	 * 线路类型，0为目的地参团，1为出发地参团 仅国内跟团游类目需要填写且必填
	 **/
	private $routeType;
	
	/** 
	 * 商品售卖类型，0为普通商品，1为预约商品；默认为0
	 **/
	private $saletype;
	
	/** 
	 * 商品秒杀，商品秒杀三个值：可选类型web_only(只能通过web网络秒杀)，wap_only(只能通过wap网络秒杀)，web_and_wap(既能通过web秒杀也能通过wap秒杀)
	 **/
	private $secondKill;
	
	/** 
	 * 关联商品与店铺类目 结构:",cid1,cid2,...,"，如果店铺类目存在二级类目，必须传入子类目cids。 支持最大长度为：256 支持的最大列表长度为：256;如何获取cid：进入店铺，点击叶子类目，页面URL里包含“category-1079296278.htm”，红色标记数字就是叶子类目ID
	 **/
	private $sellerCids;
	
	/** 
	 * 可选出发开始日期，格式：年-月-日
	 **/
	private $startComboDate;
	
	/** 
	 * 存计数，0拍下减库存，1付款减库存；集市卖家默认拍下减库存；商城卖家默认付款减库存。
	 **/
	private $subStock;
	
	/** 
	 * 亮点1，35个字符以内
	 **/
	private $subTitle1;
	
	/** 
	 * 亮点2，35个字符以内
	 **/
	private $subTitle2;
	
	/** 
	 * 亮点3，35个字符以内
	 **/
	private $subTitle3;
	
	/** 
	 * 亮点4，35个字符以内
	 **/
	private $subTitle4;
	
	/** 
	 * 景点门票说明，在1500个字符以内，仅自由行填写
	 **/
	private $ticketDesc;
	
	/** 
	 * 门票景点信息  仅限自由行填写 费用包含中 大交通、酒店住宿、景点门票、租车、保险、餐饮、其他费用填写必须大于等于其中两项
	 **/
	private $ticketInfos;
	
	/** 
	 * 商品标题，30个字符以内
	 **/
	private $title;
	
	/** 
	 * 目的地（城市或国家），填写中文，必须对应类目下存在的目的地，目的地最多12个，目的地之间用英文逗号“,”隔开；如果提示目的地不存在，请通过http://bangpai.taobao.com/group/thread/14051111-280945273.htm?spm=181.7626211.1998314043.19.JuwBlh这个链接进行申请；该数据可以根据类目属性接口来查看，链接：http://api.taobao.com/apidoc/api.htm?path=cid:20280-apiId:21802
	 **/
	private $toLocations;
	
	/** 
	 * 去程或回程交通信息 仅限自由行填写 此数组长度为2，最多只能包含两个元素（去程和回程），多个去程或回程信息，请保存在infos字段 {     ""transport_type"": 1,     ""infos"": [""CA001"",""CA002""]     ""direction_type"": 1 }"
	 **/
	private $trafficInfos;
	
	/** 
	 * 大交通说明，在1500个字符以内，仅自由行填写
	 **/
	private $trafficsDesc;
	
	/** 
	 * 行程天数，必须大于0
	 **/
	private $tripDays;
	
	/** 
	 * 签证信息，1500个字符以内 仅自由行填写且非出境游的费用包含不能选择签证
	 **/
	private $visaDesc;
	
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

	public function setAuthMerchantId($authMerchantId)
	{
		$this->authMerchantId = $authMerchantId;
		$this->apiParas["auth_merchant_id"] = $authMerchantId;
	}

	public function getAuthMerchantId()
	{
		return $this->authMerchantId;
	}

	public function setBackTrafficType($backTrafficType)
	{
		$this->backTrafficType = $backTrafficType;
		$this->apiParas["back_traffic_type"] = $backTrafficType;
	}

	public function getBackTrafficType()
	{
		return $this->backTrafficType;
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

	public function setDesc($desc)
	{
		$this->desc = $desc;
		$this->apiParas["desc"] = $desc;
	}

	public function getDesc()
	{
		return $this->desc;
	}

	public function setDiningDesc($diningDesc)
	{
		$this->diningDesc = $diningDesc;
		$this->apiParas["dining_desc"] = $diningDesc;
	}

	public function getDiningDesc()
	{
		return $this->diningDesc;
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

	public function setEndComboDate($endComboDate)
	{
		$this->endComboDate = $endComboDate;
		$this->apiParas["end_combo_date"] = $endComboDate;
	}

	public function getEndComboDate()
	{
		return $this->endComboDate;
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

	public function setGoTrafficType($goTrafficType)
	{
		$this->goTrafficType = $goTrafficType;
		$this->apiParas["go_traffic_type"] = $goTrafficType;
	}

	public function getGoTrafficType()
	{
		return $this->goTrafficType;
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

	public function setHotelDays($hotelDays)
	{
		$this->hotelDays = $hotelDays;
		$this->apiParas["hotel_days"] = $hotelDays;
	}

	public function getHotelDays()
	{
		return $this->hotelDays;
	}

	public function setHotelDesc($hotelDesc)
	{
		$this->hotelDesc = $hotelDesc;
		$this->apiParas["hotel_desc"] = $hotelDesc;
	}

	public function getHotelDesc()
	{
		return $this->hotelDesc;
	}

	public function setHotelInfos($hotelInfos)
	{
		$this->hotelInfos = $hotelInfos;
		$this->apiParas["hotel_infos"] = $hotelInfos;
	}

	public function getHotelInfos()
	{
		return $this->hotelInfos;
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

	public function setInsuranceDesc($insuranceDesc)
	{
		$this->insuranceDesc = $insuranceDesc;
		$this->apiParas["insurance_desc"] = $insuranceDesc;
	}

	public function getInsuranceDesc()
	{
		return $this->insuranceDesc;
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

	public function setOtherCostDesc($otherCostDesc)
	{
		$this->otherCostDesc = $otherCostDesc;
		$this->apiParas["other_cost_desc"] = $otherCostDesc;
	}

	public function getOtherCostDesc()
	{
		return $this->otherCostDesc;
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

	public function setRentalCarDesc($rentalCarDesc)
	{
		$this->rentalCarDesc = $rentalCarDesc;
		$this->apiParas["rental_car_desc"] = $rentalCarDesc;
	}

	public function getRentalCarDesc()
	{
		return $this->rentalCarDesc;
	}

	public function setRouteType($routeType)
	{
		$this->routeType = $routeType;
		$this->apiParas["route_type"] = $routeType;
	}

	public function getRouteType()
	{
		return $this->routeType;
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

	public function setStartComboDate($startComboDate)
	{
		$this->startComboDate = $startComboDate;
		$this->apiParas["start_combo_date"] = $startComboDate;
	}

	public function getStartComboDate()
	{
		return $this->startComboDate;
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

	public function setSubTitle1($subTitle1)
	{
		$this->subTitle1 = $subTitle1;
		$this->apiParas["sub_title1"] = $subTitle1;
	}

	public function getSubTitle1()
	{
		return $this->subTitle1;
	}

	public function setSubTitle2($subTitle2)
	{
		$this->subTitle2 = $subTitle2;
		$this->apiParas["sub_title2"] = $subTitle2;
	}

	public function getSubTitle2()
	{
		return $this->subTitle2;
	}

	public function setSubTitle3($subTitle3)
	{
		$this->subTitle3 = $subTitle3;
		$this->apiParas["sub_title3"] = $subTitle3;
	}

	public function getSubTitle3()
	{
		return $this->subTitle3;
	}

	public function setSubTitle4($subTitle4)
	{
		$this->subTitle4 = $subTitle4;
		$this->apiParas["sub_title4"] = $subTitle4;
	}

	public function getSubTitle4()
	{
		return $this->subTitle4;
	}

	public function setTicketDesc($ticketDesc)
	{
		$this->ticketDesc = $ticketDesc;
		$this->apiParas["ticket_desc"] = $ticketDesc;
	}

	public function getTicketDesc()
	{
		return $this->ticketDesc;
	}

	public function setTicketInfos($ticketInfos)
	{
		$this->ticketInfos = $ticketInfos;
		$this->apiParas["ticket_infos"] = $ticketInfos;
	}

	public function getTicketInfos()
	{
		return $this->ticketInfos;
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

	public function setTrafficInfos($trafficInfos)
	{
		$this->trafficInfos = $trafficInfos;
		$this->apiParas["traffic_infos"] = $trafficInfos;
	}

	public function getTrafficInfos()
	{
		return $this->trafficInfos;
	}

	public function setTrafficsDesc($trafficsDesc)
	{
		$this->trafficsDesc = $trafficsDesc;
		$this->apiParas["traffics_desc"] = $trafficsDesc;
	}

	public function getTrafficsDesc()
	{
		return $this->trafficsDesc;
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

	public function setVisaDesc($visaDesc)
	{
		$this->visaDesc = $visaDesc;
		$this->apiParas["visa_desc"] = $visaDesc;
	}

	public function getVisaDesc()
	{
		return $this->visaDesc;
	}

	public function getApiMethodName()
	{
		return "taobao.travel.item.add";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->accomNights,"accomNights");
		RequestCheckUtil::checkNotNull($this->cid,"cid");
		RequestCheckUtil::checkNotNull($this->city,"city");
		RequestCheckUtil::checkNotNull($this->desc,"desc");
		RequestCheckUtil::checkNotNull($this->endComboDate,"endComboDate");
		RequestCheckUtil::checkNotNull($this->orderInfo,"orderInfo");
		RequestCheckUtil::checkNotNull($this->prov,"prov");
		RequestCheckUtil::checkMaxListSize($this->refundRegulations,20,"refundRegulations");
		RequestCheckUtil::checkMaxListSize($this->sellerCids,20,"sellerCids");
		RequestCheckUtil::checkNotNull($this->startComboDate,"startComboDate");
		RequestCheckUtil::checkNotNull($this->title,"title");
		RequestCheckUtil::checkNotNull($this->toLocations,"toLocations");
		RequestCheckUtil::checkNotNull($this->tripDays,"tripDays");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
