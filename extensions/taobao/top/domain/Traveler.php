<?php

/**
 * 出行人信息
 * @author auto create
 */
class Traveler
{
	
	/** 
	 * 出行人生日，格式yyyy-mm-dd
	 **/
	public $birthday;
	
	/** 
	 * 证件号码
	 **/
	public $credentials_code;
	
	/** 
	 * 证件类型；0身份证，1护照，2学生证，3军人证，4回乡证，5台胞证，6港澳台胞，7国际海员，8外国人永久居留证，10警官证，11士兵证，12台湾通行证，13入台证，9其他证件
	 **/
	public $credentials_type;
	
	/** 
	 * 出行人邮箱
	 **/
	public $email;
	
	/** 
	 * 出行人拼音名
	 **/
	public $first_name;
	
	/** 
	 * 护照签发国
	 **/
	public $issue_country;
	
	/** 
	 * 护照签发日期
	 **/
	public $issue_date;
	
	/** 
	 * 护照签发地
	 **/
	public $issue_place;
	
	/** 
	 * 出行人拼音姓
	 **/
	public $last_name;
	
	/** 
	 * 出行人国籍
	 **/
	public $nationality;
	
	/** 
	 * 出行人类型 ；0男，1女
	 **/
	public $sex;
	
	/** 
	 * 出行人电话
	 **/
	public $telephone;
	
	/** 
	 * 出行人姓名
	 **/
	public $traveler_name;
	
	/** 
	 * 出行人类型 ；0成人，1儿童，2婴儿
	 **/
	public $traveler_type;
	
	/** 
	 * 护照有效期
	 **/
	public $valid_date;	
}
?>