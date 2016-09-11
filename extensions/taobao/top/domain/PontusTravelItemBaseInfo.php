<?php

/**
 * 商品基本信息
 * @author auto create
 */
class PontusTravelItemBaseInfo
{
	
	/** 
	 * 行程晚数，必须大于0，且小于等于行程天数 这里注意下，trip_days（行程天数）&gt;=accom_nights（行程晚数）&gt;=hotel_days（住宿晚数）
	 **/
	public $accom_nights;
	
	/** 
	 * 类目id
	 **/
	public $category_id;
	
	/** 
	 * 宝贝所在市
	 **/
	public $city;
	
	/** 
	 * pc端更多商品描述，不超过50000个字符
	 **/
	public $desc;
	
	/** 
	 * 跟团游商品必填。跟团游商品必填。出发地（城市），填写中文，必须对应类目下存在的出发地，否则会报出发地不存在，可用的城市名称可从基础API中获取：http://open.taobao.com/doc2/apiDetail?spm=0.0.0.0.hSqBrl&amp;apiId=25760  【重要提示-此属性会作为搜索/筛选条件】
	 **/
	public $from_locations;
	
	/** 
	 * 必填，商品类型。1-国内跟团游 2- 国内自由行 3-出境跟团游 4- 出境自由行 5-境外当地玩乐 6-国际邮轮 9-国内邮轮
	 **/
	public $item_type;
	
	/** 
	 * 商家定义的编码
	 **/
	public $out_id;
	
	/** 
	 * 预留，商家备注
	 **/
	public $outer_title;
	
	/** 
	 * 商品图片路径。最多支持5张，第一张为主图，必填，其余四张可选填。商品主图需要关联用户图片空间的绝对url。 这个url所对应的图片必须要属于当前用户。
	 **/
	public $pic_urls;
	
	/** 
	 * 宝贝所在地省份
	 **/
	public $prov;
	
	/** 
	 * 商品亮点。1）目前最多支持4个亮点，超过4个的亮点描述不会被保存 2）每个亮点描述35个字符以内
	 **/
	public $sub_titles;
	
	/** 
	 * 商品标题。30个字符以内
	 **/
	public $title;
	
	/** 
	 * 所有商品必填，目的地（城市或国家），填写中文。城市名，以英文逗号分隔，最多可填12个， 城市的值可从基础数据API中获取（http://open.taobao.com/doc2/apiDetail?spm=0.0.0.0.hSqBrl&amp;apiId=25760），如果国家下还有城市，则必须精确到城市。【重要提示-此字段会作为搜索/筛选条件】
	 **/
	public $to_locations;
	
	/** 
	 * 最大行程天数
	 **/
	public $trip_max_days;
	
	/** 
	 * 最小行程天数
	 **/
	public $trip_min_days;
	
	/** 
	 * 手机端描述。格式： 使用xml标签（shortDesc，txt和img）进行图文混排，shortDesc标签表示添加小标题，txt标签表示添加文本描述，img标签表示添加一张图片。  注意： 1）shortDesc，txt和img三个xml标签独立，可以乱序使用，但不能嵌套 2）图片路径只能使用商家图片空间内图片的绝对路径
	 **/
	public $wap_desc;	
}
?>