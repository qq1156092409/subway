<?php

/**
 * 航旅度假 新版电子凭证参数
 * @author auto create
 */
class PontusTravelItemEleCertInfo
{
	
	/** 
	 * 售中自动退款比例
	 **/
	public $auto_refund_rate;
	
	/** 
	 * 过期自动退款比例
	 **/
	public $expired_refund_rate;
	
	/** 
	 * 电子凭证 有效期 结束时间
	 **/
	public $expiry_date_end;
	
	/** 
	 * 电子凭证 有效期 开始时间
	 **/
	public $expiry_date_start;
	
	/** 
	 * 电子凭证有效期 过期类型。1：xxxx-xx-xx 到 xxxx-xx-xx； 2：购买成功日 至 xxxx-xx-xx； 3：购买成功 xx 天内有效
	 **/
	public $expiry_date_type;
	
	/** 
	 * 电子凭证 有效期 天数
	 **/
	public $expiry_days;
	
	/** 
	 * 核销门店库id
	 **/
	public $package_id;	
}
?>