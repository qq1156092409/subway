<?php

/**
 * 商品的销售属性相关信息
 * @author auto create
 */
class PontusTravelItemSaleInfo
{
	
	/** 
	 * 上下架状态
	 **/
	public $approve_status;
	
	/** 
	 * 返点比例
	 **/
	public $auction_point;
	
	/** 
	 * 预约商品必填，普通商品不填。预约商品开始时间，格式：yyyy-MM-dd HH:mm
	 **/
	public $bc_start_date;
	
	/** 
	 * 至少提前天数，最晚成团提前天数，最小0天，最大为300天；不传则为0
	 **/
	public $duration;
	
	/** 
	 * 预约商品必填，普通商品可不填。可选出发结束日期，格式：年-月-日 日期必须是最近300天内的，最早和最晚日期跨度最大为180天。对于普通商品，根据日历库存的最晚时间来自动计算；对于预约商品则为必填字段
	 **/
	public $end_combo_date;
	
	/** 
	 * 是否支持会员打折。可选值：true，false；默认值：false(不打折)。不传的话默认为false
	 **/
	public $has_discount;
	
	/** 
	 * 已废弃。是否提供发票 默认为false  仅C商家需要设置该值 B商家强制提供发票
	 **/
	public $has_invoice;
	
	/** 
	 * 是否橱窗推荐，可选值：true，false；默认值：false(不推荐)
	 **/
	public $has_showcase;
	
	/** 
	 * 新版电子凭证参数结构。与旧版电子凭证（merchant，network_id和support_onsale_auto_refund）二选一。即如果传了新版电子凭证参数，将忽略旧版电子凭证参数
	 **/
	public $item_ele_cert_info;
	
	/** 
	 * 电子凭证码商，格式为：码商id:码商nick。电子凭证的卖家规则详见：http://bangpai.taobao.com/group/thread/14051111-283426841.htm
	 **/
	public $merchant;
	
	/** 
	 * 电子凭证网点ID
	 **/
	public $network_id;
	
	/** 
	 * 商品售卖类型，0为普通商品，1为预约商品；默认为0
	 **/
	public $sale_type;
	
	/** 
	 * 商品秒杀，商品秒杀三个值：可选类型web_only(只能通过web网络秒杀)，wap_only(只能通过wap网络秒杀)，web_and_wap(既能通过web秒杀也能通过wap秒杀)
	 **/
	public $second_kill;
	
	/** 
	 * 关联商品与店铺类目 结构:&quot;,cid1,cid2,...,&quot;，如果店铺类目存在二级类目，必须传入子类目cids。  支持的最大列表长度为：256； 关于如何获取cid，请参考该接口：http://open.taobao.com/doc2/apiDetail.htm?apiId=65
	 **/
	public $seller_cids;
	
	/** 
	 * 预约商品必填，普通商品可不填。可选出发开始日期，格式：yyyy-MM-dd。对于普通商品，根据日历库存的最早时间来自动计算。对于预约商品则为必填字段
	 **/
	public $start_combo_date;
	
	/** 
	 * 减库存方式
	 **/
	public $sub_stock;
	
	/** 
	 * 电子凭证是否支持系统自动退款，true则表示支持
	 **/
	public $support_onsale_auto_refund;	
}
?>