<?php

/**
 * 交易详情返回值
 * @author auto create
 */
class TradeDetail
{
	
	/** 
	 * Acookie订单唯一ID。
	 **/
	public $acookie_id;
	
	/** 
	 * 卖家手工调整金额，精确到2位小数，单位：元。如：200.07，表示：200元7分。来源于订单价格修改，如果有多笔子订单的时候，这个为0，单笔的话则跟[order].adjust_fee一样
	 **/
	public $adjust_fee;
	
	/** 
	 * 买家的支付宝id号，在UIC中有记录，买家支付宝的唯一标示，不因为买家更换Email账号而改变。
	 **/
	public $alipay_id;
	
	/** 
	 * 支付宝交易号，如：2009112081173831
	 **/
	public $alipay_no;
	
	/** 
	 * 买家支付宝账号
	 **/
	public $buyer_alipay_no;
	
	/** 
	 * 买家下单的地区
	 **/
	public $buyer_area;
	
	/** 
	 * 买家邮件地址
	 **/
	public $buyer_email;
	
	/** 
	 * 买家备注旗帜（与淘宝网上订单的买家备注旗帜对应，只有买家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
	 **/
	public $buyer_flag;
	
	/** 
	 * 买家留言
	 **/
	public $buyer_message;
	
	/** 
	 * 买家昵称
	 **/
	public $buyer_nick;
	
	/** 
	 * 买家获得积分,返点的积分。格式:100;单位:个。返点的积分要交易成功之后才能获得
	 **/
	public $buyer_obtain_point_fee;
	
	/** 
	 * 买家是否已评价。可选值:true(已评价),false(未评价)。如买家只评价未打分，此字段仍返回false
	 **/
	public $buyer_rate;
	
	/** 
	 * 交易佣金。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $commission_fee;
	
	/** 
	 * 交易创建时间。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $created;
	
	/** 
	 * 使用信用卡支付金额数
	 **/
	public $credit_card_fee;
	
	/** 
	 * 系统优惠金额（如打折，VIP，满就送等），精确到2位小数，单位：元。如：200.07，表示：200元7分
	 **/
	public $discount_fee;
	
	/** 
	 * 交易结束时间。交易成功时间(更新交易状态为成功的同时更新)/确认收货时间或者交易关闭时间 。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $end_time;
	
	/** 
	 * 电子凭证的垂直信息
	 **/
	public $eticket_ext;
	
	/** 
	 * 订单出现异常问题的时候，给予用户的描述,没有异常的时候，此值为空
	 **/
	public $mark_desc;
	
	/** 
	 * 交易修改时间(用户对订单的任何修改都会更新此字段)。格式:yyyy-MM-dd HH:mm:ss
	 **/
	public $modified;
	
	/** 
	 * 商品购买数量。取值范围：大于零的整数,对于一个trade对应多个order的时候（一笔主订单，对应多笔子订单），num=0，num是一个跟商品关联的属性，一笔订单对应多比子订单的时候，主订单上的num无意义。
	 **/
	public $num;
	
	/** 
	 * 商品数字ID
	 **/
	public $num_iid;
	
	/** 
	 * 去啊国际官网直供主订单关税税费
	 **/
	public $order_tax_fee;
	
	/** 
	 * 子订单
	 **/
	public $orders;
	
	/** 
	 * 付款时间。格式:yyyy-MM-dd HH:mm:ss。订单的付款时间即为物流订单的创建时间。
	 **/
	public $pay_time;
	
	/** 
	 * 子订单实付金额。精确到2位小数，单位:元。如:200.07，表示:200元7分。对于多子订单的交易，计算公式如下：payment = price * num + adjust_fee - discount_fee ；单子订单交易，payment与主订单的payment一致，对于退款成功的子订单，由于主订单的优惠分摊金额，会造成该字段可能不为0.00元。建议使用退款前的实付金额减去退款单中的实际退款金额计算。
	 **/
	public $payment;
	
	/** 
	 * 商品图片的绝对路径
	 **/
	public $pic_path;
	
	/** 
	 * 买家使用积分,下单时生成，且一直不变。格式:100;单位:个.
	 **/
	public $point_fee;
	
	/** 
	 * 商品价格。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $price;
	
	/** 
	 * 交易促销详细信息
	 **/
	public $promotion;
	
	/** 
	 * 优惠信息
	 **/
	public $promotion_details;
	
	/** 
	 * 买家实际使用积分（扣除部分退款使用的积分），交易完成后生成（交易成功或关闭），交易未完成时该字段值为0。格式:100;单位:个
	 **/
	public $real_point_fee;
	
	/** 
	 * 卖家实际收到的支付宝打款金额（由于子订单可以部分确认收货，这个金额会随着子订单的确认收货而不断增加，交易成功后等于买家实付款减去退款金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $received_payment;
	
	/** 
	 * 卖家是否可以对订单进行评价
	 **/
	public $seller_can_rate;
	
	/** 
	 * 卖家邮件地址
	 **/
	public $seller_email;
	
	/** 
	 * 卖家备注旗帜（与淘宝网上订单的卖家备注旗帜对应，只有卖家才能查看该字段）红、黄、绿、蓝、紫 分别对应 1、2、3、4、5
	 **/
	public $seller_flag;
	
	/** 
	 * 卖家备注（与淘宝网上订单的卖家备注对应，只有卖家才能查看该字段）
	 **/
	public $seller_memo;
	
	/** 
	 * 卖家手机
	 **/
	public $seller_mobile;
	
	/** 
	 * 卖家姓名
	 **/
	public $seller_name;
	
	/** 
	 * 卖家昵称
	 **/
	public $seller_nick;
	
	/** 
	 * 卖家电话
	 **/
	public $seller_phone;
	
	/** 
	 * 卖家是否已评价。可选值:true(已评价),false(未评价)
	 **/
	public $seller_rate;
	
	/** 
	 * 交易快照地址
	 **/
	public $snapshot_url;
	
	/** 
	 * 交易状态。可选值: TRADE_NO_CREATE_PAY(没有创建支付宝交易);WAIT_BUYER_PAY(等待买家付款);SELLER_CONSIGNED_PART(卖家部分发货);WAIT_SELLER_SEND_GOODS(等待卖家发货,即:买家已付款);WAIT_BUYER_CONFIRM_GOODS(等待买家确认收货,即:卖家已发货);TRADE_FINISHED(交易成功);TRADE_CLOSED(付款以后用户退款成功，交易自动关闭);TRADE_CLOSED_BY_TAOBAO(付款以前，卖家或买家主动关闭交易);PAY_PENDING(国际信用卡支付付款确认中);WAIT_PRE_AUTH_CONFIRM(0元购合约中)
	 **/
	public $status;
	
	/** 
	 * 分阶段付款的已付金额
	 **/
	public $step_paid_fee;
	
	/** 
	 * 分阶段付款的订单状态，目前有三返回状态FRONT_NOPAID_FINAL_NOPAID(定金未付尾款未付)，FRONT_PAID_FINAL_NOPAID(定金已付尾款未付)，FRONT_PAID_FINAL_PAID(定金和尾款都付)
	 **/
	public $step_trade_status;
	
	/** 
	 * 交易编号 (父订单的交易编号)
	 **/
	public $tid;
	
	/** 
	 * 交易标题，以店铺名作为此标题的值。
	 **/
	public $title;
	
	/** 
	 * 商品金额（商品价格乘以数量的总金额）。精确到2位小数;单位:元。如:200.07，表示:200元7分
	 **/
	public $total_fee;
	
	/** 
	 * 扩展信息
	 **/
	public $trade_ext;
	
	/** 
	 * 交易内部来源。WAP(手机);HITAO(嗨淘);TOP(TOP平台);TAOBAO(普通淘宝);JHS(聚划算)一笔订单可能同时有以上多个标记，则以逗号分隔
	 **/
	public $trade_from;
	
	/** 
	 * 交易类型列表，fixed(一口价);auction(拍卖);guarantee_trade(一口价、拍卖);auto_delivery(自动发货);cod(货到付款);external_trade(统一外部交易);instant_trade(即时交易);b2c_cod(大商家货到付款);nopaid(即时到帐);eticket(电子凭证订单);step(分阶段付款)
	 **/
	public $type;
	
	/** 
	 * 电子凭证未核销的数量
	 **/
	public $unverified;
	
	/** 
	 * 电子凭证核销的数量
	 **/
	public $verified;	
}
?>