<?php
use \yii\helpers\Url;
use yii\web\View;

/**
 * @var $this View
 */
$this->beginPage();

$store=$this->params["store"];
$adgroup=$this->params["adgroup"];
$active=Yii::$app->controller->getRoute();
$item=$adgroup->item;
?>
    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="renderer" content="webkit">
        <title>首页-开车精灵</title>
        <link rel="shortcut icon" href="http://w01.ztcjl.com/site_media/assets/img/favicon.png">
        <link rel="stylesheet" href="<?= Url::to("origin/css/theme.css") ?>">
        <link rel="stylesheet" href="<?= Url::to("origin/css/font.css") ?>">
        <link id="systheme" rel="stylesheet" href="<?= Url::to("origin/css/quickLayout.css") ?>">
        <?php $this->head()?>
    </head>

    <body id="web_home" class="">
    <?php $this->beginBody();?>
    <input id="nick" type="hidden" value="<?=$store->nick?>">
    <section id="main_content">
        <header>
            <div class="bg_layer"></div>
            <!--顶部横条 start-->
            <div class="auto tc hide" id="top_user_info">
                <div class="r" id="hide_user_info">
                    <!--<a href="javascript:;" id="close_user_info" >下次再填<strong><i class="icon iconfont">&#xe614;</i></strong></a>-->
                </div>
                <div class="tc">

                    <p id="lbl_title">完善会员信息，享受更贴心的服务，更优惠的价格</p>

                    <p id="lbl_descr">获得500会员积分，续订/升级更加优惠，计划烧下线短信提醒，宝贝违规下架短信提醒，免费店铺诊断</p>

                    <div class="line_box">
                        <input type="text" id="txt_tel" placeholder="请输入您的手机号">
                        <input type="text" id="txt_qq" placeholder="请输入您的QQ号">
                        <button class="btn btn-sm btn-primary" id="btn_save_info">确认</button>
                        <span id="lbl_msg">(完善信息后将不再显示)</span>
                    </div>

                </div>
            </div>

            <!--顶部横条 end-->
            <div id="siet_info">
                <aside><a id="chart_link_ad" ad_id="" href="javascript:;" target="_blank"></a></aside>
                <!--文字链 start-->

                <!--文字链 end-->
                <ul>
                    <li class="poptip">
                        <a href="javascript:;"><i class="iconfont"></i>设置</a>

                        <div class="popcontent animate" id="account_setting">
                            <div class="themes">
                                <a href="javascript:;" class="green"></a>
                                <a href="javascript:;" class="dark_blue"></a>
                                <a href="javascript:;" class="light_blue"></a>
                                <a href="javascript:;" class="orange"></a>
                            </div>
                            <p class="pt10 pb5">
                                账户异常情况发送短信提醒
                                <span class="switch  vm" data-toggle="switch"></span>
                            </p>

                            <div id="user_info" class="hidden">
                                <div class="form-group">
                                    <label for="phone">手机号</label>
                                    <input type="text" class="form-control" name="phone" value="15945678912">
                                </div>
                                <div class="form-group">
                                    <label for="nick">称 呼</label>
                                    <input type="text" class="form-control" name="nick" value="">
                                </div>
                            </div>
                            <div class="tr">
                                <button class="btn btn-sm btn-primary">保存</button>
                            </div>
                        </div>
                    </li>
                    <li><a href="javascript:;" id="id_sync_data"><i class="iconfont"></i>下载全店数据</a></li>
                    <li><a href="http://w01.ztcjl.com/web/vip_home/"><i class="iconfont"></i>会员中心</a></li>
                    <li><a href="javascript:;" id="top_msg"><i class="iconfont"></i>我的私信<span id="msg_count"
                                                                                               class="round_mark hide">0</span></a>
                    </li>
                    <li class="poptip">
                        <a href="javascript:;">
                            <i class="iconfont"></i><span id="a_nick"><?=$store->nick?></span><i class="iconfont animaite"></i>
                        </a>
                        <ul class="popcontent animate ">
                            <li><a href="http://w01.ztcjl.com/web/user_config" target="_blank">设置代理</a></li>
                            <li><a href="http://shop128357319.taobao.com/" target="_blank">店铺首页</a></li>
                            <li><a href="http://w01.ztcjl.com/router/top_logout/dark_blue" id="top_logout">退出系统</a></li>
                            <!-- <li><a href="">升级日志</a></li> -->
                            <!--                    <li><a href="">退出系统</a></li>-->
                        </ul>
                    </li>
                </ul>

            </div>
            <div id="adg_nav">
                <aside>
            <span class="adg_img_warp">
	            <img src="<?=Url::to("origin/images/TB2rygzab2B11BjSsplXXcMDVXa_!!409358473.jpg_320x320.jpg")?>" class="abs">
                <img src="<?=Url::to("origin/images/TB2rygzab2B11BjSsplXXcMDVXa_!!409358473.jpg_60x60.jpg")?>" class="w60 h60">
            </span>
                    <div>
                        <div class="title adg_title ell pct100"><a href="http://item.taobao.com/item.htm?id=<?=$item?$item->num_id:0?>" target="_blank" title="<?=$item?$item->title:""?>" id="item_title"><?=$item?$item->title:""?></a></div>
                        <div class="sub">
                            <span>￥<?=$item?$item->price:"-"?>元</span>
                    <span class="poptip">
                        <a class="ml30 dib" href="javascript:;" style="margin-bottom: 7px;">宝贝信息</a>
                        <div id="adg_info" class="popcontent animate">
                            <table class="item_dark lh30">
                                <tbody><tr>
                                    <td class="w60">推广状态：</td>
                                    <td>推广中</td>
                                </tr>
                                <tr>
                                    <td>托管状态：</td>
                                    <td>不托管</td>
                                </tr>
                                <tr>
                                    <td>所属计划：</td>
                                    <td>侧款-大麦</td>
                                </tr>
                                <tr>
                                    <td>所属类目：</td>
                                    <td id="cat_info" cat_id="162205">女装/女士精品&gt;牛仔裤</td>
                                </tr>
                                <tr>
                                    <td>默认出价：</td>
                                    <td>0.30元</td>
                                </tr>
                                </tbody></table>
                        </div>
                    </span>
                            <a id="adg_rpt_detail" class="ml30" href="javascript:;">报表明细</a>
                        </div>
                    </div>
                </aside>
                <nav>
                    <ul>
                        <li class="<?=$active=="adgroup/smart"?"active":""?>">
                            <a href="<?=Url::to(["/adgroup/smart","id"=>$adgroup->adgroup_id])?>">
                                <img src="<?=Url::to("origin/images/znyh.png")?>" alt="">
                                <span>智能优化</span>
                            </a>
                        </li>
                        <li class="<?=$active=="adgroup/bulk"?"active":""?>">
                            <a href="<?=Url::to(["/adgroup/bulk","id"=>$adgroup->adgroup_id])?>">
                                <img src="<?=Url::to("origin/images/tgxq.png")?>" alt="">
                                <span>批量优化</span>
                            </a>
                        </li>

                        <li class="<?=$active=="adgroup/keyword-select"?"active":""?>">
                            <a href="<?=Url::to(["/adgroup/keyword-select","id"=>$adgroup->adgroup_id])?>">
                                <img src="<?=Url::to("origin/images/xc.png")?>" alt="">
                                <span>选词</span>
                            </a>
                        </li>
                        <li class="<?=$active=="adgroup/item-title"?"active":""?>">
                            <a href="<?=Url::to(["/adgroup/item-title","id"=>$adgroup->adgroup_id])?>">
                                <img src="<?=Url::to("origin/images/btyh.png")?>" alt="">
                                <span>标题优化</span>
                            </a>
                        </li>
                        <li class="<?=$active=="adgroup/creatives"?"active":""?>">
                            <a href="<?=Url::to(["/adgroup/creatives","id"=>$adgroup->adgroup_id])?>">
                                <img src="<?=Url::to("origin/images/cyyh.png")?>" alt="">
                                <span>创意优化</span>
                            </a>
                        </li>
                        <li class="<?=$active==6?"active":""?>">
                            <a class="open_manage_elemword" id="manage_elemword_539103908109" adg_id="539103908109">
                                <img src="<?=Url::to("origin/images/gjcsz.png")?>" alt="">
                                <span>关键词设置</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" id="id_sync_adg_data" adg_id="715202952" camp_id="35560990">
                                <img src="<?=Url::to("origin/images/tbsj.png")?>" alt="">
                                <span>下载宝贝数据</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <?= $content ?>
        <div class="auto bg_white tc mt20" id="show_bottom_banner" ad_id="27">
            <div id="bottom_banner_content" class="pct100">

                <a href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89"><img
                        id="test_img" class="pct100 pl30 pr30"
                        src="<?= Url::to("origin/images/TB2ib2hnXXXXXblXpXXXXXXXXXX-836440495.jpg") ?>"></a>

            </div>
        </div>

        <footer>
            <div>
                <a href="http://www.paithink.com/" target="_blank">公司网站</a>  
                <a href="http://www.paithink.com/promotion.html" target="_blank">店铺推广服务</a>  
                <a href="http://www.paithink.com/operate.html" target="_blank">店铺运营服务</a>  
                <a href="http://bangpai.taobao.com/group/14487125.htm" target="_blank">加入开车精灵帮派</a>  
                <a href="http://w01.ztcjl.com/web/point_praise/">给精灵好评</a>

                <p>
                    Copyright@2015 www.paithink.com Inc.All Rights Reserved.武汉派生科技有限公司 保留一切权利
                </p>
            </div>
        </footer>
        <div id="back_top" class="">
            <i class="iconfont"></i>
        </div>
    </section>


    <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
    <div class="ui-front comiseo-daterangepicker-mask" style="display: none;"></div>
    <div class="comiseo-daterangepicker comiseo-daterangepicker-right ui-widget ui-widget-content ui-corner-all ui-front"
         style="display: none; left: 113px; top: 142px;">
        <div class="comiseo-daterangepicker-main ui-widget-content">
            <div class="comiseo-daterangepicker-presets">
                <ul id="ui-id-1" class="ui-menu ui-widget ui-widget-content" role="menu" tabindex="0">
                    <li class="ui-menu-item" id="ui-id-2" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">昨天</a></li>
                    <li class="ui-menu-item" id="ui-id-3" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去3天</a></li>
                    <li class="ui-menu-item" id="ui-id-4" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去7天</a></li>
                    <li class="ui-menu-item" id="ui-id-5" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去15天</a></li>
                    <li class="ui-menu-item" id="ui-id-6" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去30天</a></li>
                    <li class="ui-menu-item" id="ui-id-7" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">上个月</a></li>
                </ul>
            </div>
            <div class="comiseo-daterangepicker-calendar ui-widget-content hasDatepicker" id="dp1476280642991">
                <div
                    class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-4"
                    style="display: block; width: 68em;">
                    <div class="ui-datepicker-group ui-datepicker-group-first">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a
                                class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="&lt;上月"><span
                                    class="ui-icon ui-icon-circle-triangle-w">&lt;上月</span></a>

                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">七月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">1</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">2</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">3</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">4</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">5</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">6</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">7</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">8</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">9</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">10</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">11</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">12</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">13</span>
                                </td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">14</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">15</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">16</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">17</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">18</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">19</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">20</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">21</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">22</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">23</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">24</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">25</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">26</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">27</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">28</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">29</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">30</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">31</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-group ui-datepicker-group-middle">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix">
                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">八月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">1</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">2</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">3</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">4</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">5</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">6</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">7</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">8</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">9</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">10</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">11</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">12</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">13</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">14</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">15</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">16</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">17</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">18</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">19</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">20</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">21</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">22</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">23</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">24</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">25</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">26</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">27</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">28</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">29</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">30</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">31</a></td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-group ui-datepicker-group-middle">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix">
                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">九月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">1</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">2</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">3</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">4</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">5</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">6</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">7</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">8</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">9</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">10</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">11</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">12</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">13</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">14</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">15</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">16</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">17</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">18</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">19</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">20</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">21</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">22</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">23</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">24</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">25</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">26</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">27</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">28</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">29</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">30</a></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-group ui-datepicker-group-last">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a
                                class="ui-datepicker-next ui-corner-all ui-state-disabled" title="下月&gt;"><span
                                    class="ui-icon ui-icon-circle-triangle-e">下月&gt;</span></a>

                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">十月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">1</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">2</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">3</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">4</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">5</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">6</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">7</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">8</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">9</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">10</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">11</a></td>
                                <td class=" ui-datepicker-days-cell-over   ui-datepicker-current-day ui-datepicker-today"
                                    data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a
                                        class="ui-state-default ui-state-highlight ui-state-active ui-state-hover"
                                        href="http://w01.ztcjl.com/web/web_home/#">12</a></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">13</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">14</span>
                                </td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">15</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">16</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">17</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">18</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">19</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">20</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">21</span>
                                </td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">22</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">23</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">24</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">25</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">26</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">27</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">28</span>
                                </td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">29</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">30</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">31</span>
                                </td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-row-break"></div>
                </div>
            </div>
        </div>
        <div class="ui-helper-clearfix">
            <div class="comiseo-daterangepicker-buttonpanel">
                <button type="button"
                        class="ui-priority-primary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                        role="button"><span class="ui-button-text">确定</span></button>
                <button type="button"
                        class="ui-priority-secondary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                        role="button"><span class="ui-button-text">取消</span></button>
            </div>
        </div>
    </div>
    <div class="ui-front comiseo-daterangepicker-mask" style="display: none;"></div>
    <div class="comiseo-daterangepicker comiseo-daterangepicker-right ui-widget ui-widget-content ui-corner-all ui-front"
         style="display: none; left: 113px; top: 662px;">
        <div class="comiseo-daterangepicker-main ui-widget-content">
            <div class="comiseo-daterangepicker-presets">
                <ul id="ui-id-8" class="ui-menu ui-widget ui-widget-content" role="menu" tabindex="0">
                    <li class="ui-menu-item" id="ui-id-9" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">今日实时</a></li>
                    <li class="ui-menu-item" id="ui-id-10" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">昨天</a></li>
                    <li class="ui-menu-item" id="ui-id-11" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去3天</a></li>
                    <li class="ui-menu-item" id="ui-id-12" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去7天</a></li>
                    <li class="ui-menu-item" id="ui-id-13" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去15天</a></li>
                    <li class="ui-menu-item" id="ui-id-14" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">过去30天</a></li>
                    <li class="ui-menu-item" id="ui-id-15" tabindex="-1" role="menuitem"><a
                            href="http://w01.ztcjl.com/web/web_home/#">上个月</a></li>
                </ul>
            </div>
            <div class="comiseo-daterangepicker-calendar ui-widget-content hasDatepicker" id="dp1476280642992">
                <div
                    class="ui-datepicker-inline ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-datepicker-multi ui-datepicker-multi-4"
                    style="display: block; width: 68em;">
                    <div class="ui-datepicker-group ui-datepicker-group-first">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-left"><a
                                class="ui-datepicker-prev ui-corner-all ui-state-disabled" title="&lt;上月"><span
                                    class="ui-icon ui-icon-circle-triangle-w">&lt;上月</span></a>

                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">七月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">1</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">2</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">3</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">4</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">5</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">6</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">7</span></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">8</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">9</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">10</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">11</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">12</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">13</span>
                                </td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">14</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">15</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">16</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">17</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">18</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">19</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">20</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">21</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">22</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">23</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">24</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">25</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">26</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">27</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">28</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="6" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">29</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">30</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="6" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">31</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-group ui-datepicker-group-middle">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix">
                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">八月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">1</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">2</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">3</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">4</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">5</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">6</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">7</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">8</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">9</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">10</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">11</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">12</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">13</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">14</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">15</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">16</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">17</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">18</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">19</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">20</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">21</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">22</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">23</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">24</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">25</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">26</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">27</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="7" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">28</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">29</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">30</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="7" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">31</a></td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-group ui-datepicker-group-middle">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix">
                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">九月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">1</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">2</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">3</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">4</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">5</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">6</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">7</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">8</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">9</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">10</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">11</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">12</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">13</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">14</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">15</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">16</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">17</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">18</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">19</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">20</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">21</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">22</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">23</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">24</a>
                                </td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="8" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">25</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">26</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">27</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">28</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">29</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="8" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">30</a></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-group ui-datepicker-group-last">
                        <div class="ui-datepicker-header ui-widget-header ui-helper-clearfix ui-corner-right"><a
                                class="ui-datepicker-next ui-corner-all ui-state-disabled" title="下月&gt;"><span
                                    class="ui-icon ui-icon-circle-triangle-e">下月&gt;</span></a>

                            <div class="ui-datepicker-title"><span class="ui-datepicker-month">十月</span>&nbsp;<span
                                    class="ui-datepicker-year">2016</span></div>
                        </div>
                        <table class="ui-datepicker-calendar">
                            <thead>
                            <tr>
                                <th scope="col"><span title="星期一">一</span></th>
                                <th scope="col"><span title="星期二">二</span></th>
                                <th scope="col"><span title="星期三">三</span></th>
                                <th scope="col"><span title="星期四">四</span></th>
                                <th scope="col"><span title="星期五">五</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期六">六</span></th>
                                <th scope="col" class="ui-datepicker-week-end"><span title="星期日">日</span></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">1</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">2</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">3</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">4</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">5</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">6</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">7</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">8</a></td>
                                <td class=" ui-datepicker-week-end  " data-handler="selectDay" data-event="click"
                                    data-month="9" data-year="2016"><a class="ui-state-default"
                                                                       href="http://w01.ztcjl.com/web/web_home/#">9</a></td>
                            </tr>
                            <tr>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">10</a></td>
                                <td class="  " data-handler="selectDay" data-event="click" data-month="9" data-year="2016">
                                    <a class="ui-state-default" href="http://w01.ztcjl.com/web/web_home/#">11</a></td>
                                <td class=" ui-datepicker-days-cell-over   ui-datepicker-current-day ui-datepicker-today"
                                    data-handler="selectDay" data-event="click" data-month="9" data-year="2016"><a
                                        class="ui-state-default ui-state-highlight ui-state-active ui-state-hover"
                                        href="http://w01.ztcjl.com/web/web_home/#">12</a></td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">13</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">14</span>
                                </td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">15</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">16</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">17</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">18</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">19</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">20</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">21</span>
                                </td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">22</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">23</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">24</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">25</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">26</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">27</span>
                                </td>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">28</span>
                                </td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">29</span></td>
                                <td class=" ui-datepicker-week-end ui-datepicker-unselectable ui-state-disabled  "><span
                                        class="ui-state-default">30</span></td>
                            </tr>
                            <tr>
                                <td class=" ui-datepicker-unselectable ui-state-disabled  "><span class="ui-state-default">31</span>
                                </td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                                <td class=" ui-datepicker-week-end ui-datepicker-other-month ui-datepicker-unselectable ui-state-disabled">
                                    &nbsp;</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui-datepicker-row-break"></div>
                </div>
            </div>
        </div>
        <div class="ui-helper-clearfix">
            <div class="comiseo-daterangepicker-buttonpanel">
                <button type="button"
                        class="ui-priority-primary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                        role="button"><span class="ui-button-text">确定</span></button>
                <button type="button"
                        class="ui-priority-secondary ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
                        role="button"><span class="ui-button-text">取消</span></button>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_report_detail">
        <div class="modal-dialog modal-lger">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <span class="modal-title f18">报表明细</span>

                    <div class="dtr_picker_warp ml10">
                        <span class="tip" id="report_detail_days" rt_rpt="0" months="3" style="display: none;">昨天</span>
                        <button type="button"
                                class="comiseo-daterangepicker-triggerbutton ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-secondary comiseo-daterangepicker-bottom"
                                id="drp_autogen2" role="button"><span class="ui-button-text">过去7天</span><span
                                class="ui-button-icon-secondary ui-icon ui-icon-triangle-1-s"></span></button>
                    </div>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
    <?php $this->endBody()?>
    </body>
    </html>
<?php $this->endPage()?>