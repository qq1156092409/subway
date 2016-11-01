<?php
use \yii\helpers\Url;
use yii\web\View;

/**
 * @var $this View
 */
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
    <link id="systheme" rel="stylesheet" href="<?= Url::to("origin/css/quickLayout.css") ?>">
    <style>
        @font-face {
            font-family: 'iconfont';
            src: url('http://at.alicdn.com/t/font_1466065367_3793232.eot'); /* IE9*/
            src: url('http://at.alicdn.com/t/font_1466065367_3793232.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('http://at.alicdn.com/t/font_1466065367_3793232.woff') format('woff'), /* chrome、firefox */ url('http://at.alicdn.com/t/font_1466065367_3793232.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/ url('http://at.alicdn.com/t/font_1466065367_3793232.svg#iconfont') format('svg'); /* iOS 4.1- */
        }
    </style>
</head>

<body id="web_home" class="">

<input id="systhemes" type="hidden" value="dark_blue">
<input id="shop_id" type="hidden" value="128357319">
<input id="nick" type="hidden" value="789linjie">
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
                        <i class="iconfont"></i><span id="a_nick">789linjie</span><i class="iconfont animaite"></i>
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
        <div id="site_nav">
            <a href="http://w01.ztcjl.com/web/web_home" class="logo">
                <img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALoAAAAyCAYAAADr7cFEAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDpCMDJCMTlFRDA3NEFFNTExQTM3QUYyQjE3RDUyMTFDQiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDozQ0ZFRUIyNzU5MUQxMUU1OTRGRUQxQjE5Njc5QUUwRSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDozQ0ZFRUIyNjU5MUQxMUU1OTRGRUQxQjE5Njc5QUUwRSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkU0REJGRUZFMTc1OUU1MTFBQjYwQzhBOEM1OTM0NjNGIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkIwMkIxOUVEMDc0QUU1MTFBMzdBRjJCMTdENTIxMUNCIi8+IDwvcmRmOkRlc2NyaXB0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"
                    alt="">
            </a>

            <nav>
                <ul>
                    <li class="active">
                        <a href="http://w01.ztcjl.com/web/web_home"><i class="iconfont"></i>首页</a>
                    </li>
                    <li class="poptip ">
                        <a href="javascript:void(0);"> <i class="iconfont"></i>自动优化</a>
                        <ul class="popcontent animate">


                            <li>
                                <a href="http://w01.ztcjl.com/mnt/choose_mnt_campaign/0">添加托管计划</a>
                            </li>

                        </ul>
                    </li>
                    <li class="poptip ">
                        <a href="javascript:void(0);"> <i class="iconfont"></i>手动优化</a>
                        <ul class="popcontent animate">
                            <li><a href="http://w01.ztcjl.com/web/hand_optimize/">宝贝列表</a></li>
                            <li><a id="duplicate_check_id" href="javascript:;">全店删词</a></li>
                            <li><a href="http://w01.ztcjl.com/web/shop_core/">全店核心词</a></li>
                        </ul>
                    </li>
                    <li class="poptip ">
                        <a href="javascript:void(0);"> <i class="iconfont"></i>工具</a>
                        <ul class="popcontent animate">
                            <li><a href="http://w01.ztcjl.com/web/op_history/">操作记录</a></li>
                            <li><a href="http://w01.ztcjl.com/web/auto_rob_rank/">自动抢排名</a></li>
                        </ul>
                    </li>

                    <li class="poptip ">
                        <a href="javascript:void(0);"> <i class="iconfont"></i>服务中心</a>
                        <ul class="popcontent animate w200">

                            <li class="server_menu" value="12"><a href="http://w01.ztcjl.com/web/paithink_services/12"
                                                                  target="_blank">软件服务教程</a></li>

                            <li class="server_menu" value="28"><a href="http://w01.ztcjl.com/web/paithink_services/28"
                                                                  target="_blank">视觉营销服务</a></li>

                        </ul>
                    </li>

                </ul>
            </nav>
            <aside>
            <span class="poptip">
                <a href="javascript:;" title="联系旺旺">
                    <img src="<?= Url::to("origin/images/wangwang.png") ?>" class="lxwm">
                </a>
                <div class="popcontent animate" id="concet_ww" consult_ww="">
                    <ul>

                        <li id="li_pskj_WW">
                            <div class="title">精灵主旺旺</div>
                            <div class="phone">派生科技</div>
                            <div>
                                <a href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E7%A7%91%E6%8A%80"><img
                                        class="marl_6" src="<?= Url::to("origin/images/online.ww.gif") ?>"></a>
                            </div>
                            <time>（在线时间：8:30-23:00）</time>
                        </li>
                        <li>
                            <div class="title">预约专家免费诊断</div>
                            <div>
                                <a id="order_shop_check" class="a_WW"
                                   href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E7%A7%91%E6%8A%80"><img
                                        class="marl_6" src="<?= Url::to("origin/images/online.ww.gif") ?>"></a>
                            </div>
                            <time>
                                (周一至周五 8:30-18:00)
                            </time>
                        </li>
                        <li>
                            <div class="title">顾问专线</div>
                            <div class="phone">400-0610-203</div>
                            <time>（在线时间：9:00-23:00）</time>
                        </li>
                        <li>
                            <div class="title">投诉电话</div>
                            <div class="phone">027-59401772</div>
                            <time>
                                (周一至周五 14:00-22:00)
                            </time>
                        </li>
                    </ul>
                </div>
            </span>
            <span class="poptip">
                <a href="javascript:;" title="微信二维码">
                    <img src="<?= Url::to("origin/images/weixin.png") ?>">
                </a>
                <div class="popcontent animate" id="concat_wx">
                    <img src="<?= Url::to("origin/images/wx.png") ?>" alt="">

                    <div class="tc mb10">加微信公众号<br>关注电商干货</div>
                </div>
            </span>
            <span class="hide">
                <a href="http://w01.ztcjl.com/web/web_home/" title="帮助">
                    <img src="<?= Url::to("origin/images/bangzhu.png") ?>">
                </a>
            </span>
            <span class="jpoptip">
                <a href="javascript:;" title="意见反馈">
                    <img src="<?= Url::to("origin/images/yijian.png") ?>">
                </a>
                <div class="popcontent animate" id="suggest">
                    <p class="title">意见反馈</p>
                    <textarea class="form-control" placeholder="您的意见是我们前进最大的动力"></textarea>

                    <div class="tip form-inline">感谢您的建议与鞭策

                    </div>
                    <button class="btn btn-primary btn-sm">提交反馈</button>
                </div>
            </span>
            </aside>

        </div>
    </header>

    <section class="container-fluid">
        <!--主区横条start-->

        <!--主区横条end-->
        <div class="main_rpt_warp pr290" id="account_warp">
            <article class="box">
                <header>
                    <div class="line_box">
                        <span class="title">账户报表</span>
                        <!--                    <div class="select_warp" id="select_account_days">
                                                <span class="tip" data-toggle="dropdown">昨天</span>
                                                <ul class="dropdown-menu">
                                                  <li data-value="1"><span>昨天</span></li>
                                                  <li data-value="7"><span>过去7天</span></li>
                                                  <li data-value="15"><span>过去15天</span></li>
                                                </ul>
                                            </div>-->
                        <div class="dtr_picker_warp">
                            <span class="tip" data-toggle="dtr_picker" id="select_account_days" rt_rpt="0"
                                  style="display: none;">昨天</span>
                            <button type="button"
                                    class="comiseo-daterangepicker-triggerbutton ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-secondary comiseo-daterangepicker-bottom"
                                    id="drp_autogen0" role="button"><span class="ui-button-text">过去7天</span><span
                                    class="ui-button-icon-secondary ui-icon ui-icon-triangle-1-s"></span></button>
                        </div>
                        <a href="javascript:;" id="account_detail" class="sub">查看明细</a>
                    </div>
                </header>
                <div>
                    <div class="pl12 pr12">
                        <table class="rt_rpt">
                            <tbody>
                            <tr>
                                <td>实时数据：</td>
                                <td>花费：1823.83元</td>
                                <td>展现量：78493</td>
                                <td>点击量：3687</td>
                                <td>点击率：4.70%</td>
                                <td>PPC：0.49元</td>
                                <td>购物车总数：215</td>
                                <td>成交额：<span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                              data-original-title="直接成交金额: 1364.98&lt;br&gt;&lt;/span&gt;间接成交金额: 571.64">1936.62</span>元
                                </td>
                                <td>收藏量：<span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                              data-original-title="店铺收藏数: 23&lt;br&gt;&lt;/span&gt;宝贝收藏数: 243">266</span>次
                                </td>
                                <td>成交量：<span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                              data-original-title="直接成交笔数: 24&lt;br&gt;&lt;/span&gt;间接成交笔数: 11">35</span>笔
                                </td>
                                <td class="w30 tr">
                                    <div class="rel update_cache" data-toggle="tooltip" data-placement="top"
                                         data-trigger="hover" title=""
                                         data-original-title="系统每5分钟自动刷新一次，点击图标会立即刷新。&lt;br&gt;&lt;/div&gt;实时数据成交低不要急，有些点击不会马上转化的哦">
                                        <i class="iconfont f24 dib lh30 b vh"></i>
                                        <!--            <i class="iconfont f24 lh30 abs r0 b clock-long-hand">&#xe64e;</i>
                                                    <i class="iconfont f24 lh30 abs r0 b clock-short-hand">&#xe64b;</i> -->
                                        <i class="clock-long-hand"> </i>
                                        <i class="clock-short-hand"> </i>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <table class="total_rpt">
                        <tbody>
                        <tr>
                            <td rowspan="4">　　</td>
                            <td>总花费　</td>
                            <td>展现量　</td>
                            <td>点击量　</td>
                            <td>点击率　</td>
                            <td>PPC&nbsp;<i class="iconfont f14" data-toggle="tooltip" data-placement="top"
                                            data-trigger="hover" title="" data-original-title="平均点击花费"></i>　
                            </td>
                            <td>购物车总数</td>
                        </tr>
                        <tr class="data">
                            <td class="b">￥<?=$totalBase->cost/100?></td>
                            <td><?=$totalBase->impressions?></td>
                            <td><?=$totalBase->click?></td>
                            <td>5.45%</td>
                            <td>0.52</td>
                            <td>1652</td>
                        </tr>
                        <tr>
                            <td>成交额</td>
                            <td>收藏量</td>
                            <td>成交量</td>
                            <td>转化率</td>
                            <td>ROI&nbsp;<i class="iconfont f14" data-toggle="tooltip" data-placement="top"
                                            data-trigger="hover" title="" data-original-title="投资回报率"></i></td>
                            <td>成交量单价&nbsp;<i class="iconfont f14" data-toggle="tooltip" data-placement="top"
                                              data-trigger="hover" title="" data-original-title="成交量单价 = 成交额/成交量"></i>
                            </td>
                        </tr>
                        <tr class="data">
                            <td class="b"><span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                                data-original-title="直接成交金额: 12634.42&lt;br&gt;&lt;/span&gt;间接成交金额: 4411.39">￥<span
                                        class="pay">17045.81</span></span></td>
                            <td><span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                      data-original-title="店铺收藏数: 194&lt;br&gt;&lt;/span&gt;宝贝收藏数: 1950">
      2144
      </span></td>
                            <td><span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                      data-original-title="直接成交笔数: 210&lt;br&gt;&lt;/span&gt;间接成交笔数: 83">293</span></td>
                            <td>1.17%</td>
                            <td>1.31</td>
                            <td>58.18</td>
                        </tr>
                        </tbody>
                    </table>

                    <div id="account_char" class="pct100" data-highcharts-chart="0">
                        <div class="highcharts-container" id="highcharts-0"
                             style="position: relative; overflow: hidden; width: 1551px; height: 277px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg version="1.1"
                                 style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                                 xmlns="http://www.w3.org/2000/svg" width="1551" height="277">
                                <desc>Created with Highcharts 4.1.8</desc>
                                <defs>
                                    <clippath id="highcharts-1">
                                        <rect x="0" y="0" width="1474" height="143"></rect>
                                    </clippath>
                                </defs>
                                <rect x="0" y="0" width="1551" height="277" strokeWidth="0" fill="#FFFFFF"
                                      class=" highcharts-background"></rect>
                                <g class="highcharts-grid" zIndex="1">
                                    <path fill="none" d="M 101.5 10 L 101.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 285.5 10 L 285.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 470.5 10 L 470.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 654.5 10 L 654.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 838.5 10 L 838.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 1022.5 10 L 1022.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 1207.5 10 L 1207.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 1391.5 10 L 1391.5 153" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                </g>
                                <g class="highcharts-grid" zIndex="1"></g>
                                <g class="highcharts-grid" zIndex="1"></g>
                                <g class="highcharts-grid" zIndex="1"></g>
                                <g class="highcharts-grid" zIndex="1">
                                    <path fill="none" d="M 10 153.5 L 1484 153.5" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 10 82.5 L 1484 82.5" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                    <path fill="none" d="M 10 9.5 L 1484 9.5" stroke="#ddd" stroke-width="1"
                                          stroke-dasharray="4,3" zIndex="1" opacity="1"></path>
                                </g>
                                <g class="highcharts-grid" zIndex="1"></g>
                                <g class="highcharts-grid" zIndex="1"></g>
                                <g class="highcharts-axis" zIndex="2">
                                    <path fill="none" d="M 101.5 173 L 101.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 285.5 173 L 285.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 470.5 173 L 470.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 654.5 173 L 654.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 838.5 173 L 838.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 1022.5 173 L 1022.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 1207.5 173 L 1207.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 1391.5 173 L 1391.5 163" stroke="#C0D0E0" stroke-width="1"
                                          opacity="1"></path>
                                    <path fill="none" d="M 10 173.5 L 1484 173.5" stroke="#C0D0E0" stroke-width="1"
                                          zIndex="7" visibility="visible"></path>
                                </g>
                                <g class="highcharts-axis" zIndex="2"></g>
                                <g class="highcharts-axis" zIndex="2"></g>
                                <g class="highcharts-axis" zIndex="2"></g>
                                <g class="highcharts-axis" zIndex="2"></g>
                                <g class="highcharts-axis" zIndex="2"></g>
                                <g class="highcharts-axis" zIndex="2"></g>
                                <g class="highcharts-series-group" zIndex="3">
                                    <path fill="rgba(253,91,120,0.25)"
                                          d="M 470.625 59.434375 C 483.945 59.434375 483.945 79.434375 470.625 79.434375 C 457.305 79.434375 457.305 59.434375 470.625 59.434375 Z"></path>
                                    <path fill="rgba(30,144,255,0.25)" d="M 0 0"></path>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#426ab3" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#87CEFA" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#06B9D1" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#005687" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="visible" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none"
                                              d="M 92.125 84.733935 C 92.125 84.733935 202.675 84.73179 276.375 84.73179 C 350.075 84.73179 386.925 84.73214750000001 460.625 84.73214750000001 C 534.325 84.73214750000001 571.175 79.29779 644.875 78.8069425 C 718.575 78.316095 755.425 78.8069425 829.125 78.316095 C 902.825 77.8252475 939.675 78.316095 1013.375 73.76512 C 1087.075 69.21414499999999 1123.925 49.67391000000001 1197.625 49.67391000000001 C 1271.325 49.67391000000001 1381.875 77.7980775 1381.875 77.7980775"
                                              stroke="#1E90FF" stroke-width="2" zIndex="1" stroke-linejoin="round"
                                              stroke-linecap="round"></path>
                                        <path fill="none"
                                              d="M 82.125 84.733935 L 92.125 84.733935 C 92.125 84.733935 202.675 84.73179 276.375 84.73179 C 350.075 84.73179 386.925 84.73214750000001 460.625 84.73214750000001 C 534.325 84.73214750000001 571.175 79.29779 644.875 78.8069425 C 718.575 78.316095 755.425 78.8069425 829.125 78.316095 C 902.825 77.8252475 939.675 78.316095 1013.375 73.76512 C 1087.075 69.21414499999999 1123.925 49.67391000000001 1197.625 49.67391000000001 C 1271.325 49.67391000000001 1381.875 77.7980775 1381.875 77.7980775 L 1391.875 77.7980775"
                                              stroke-linejoin="round" visibility="visible"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)" style="">
                                        <path fill="#1E90FF"
                                              d="M 1378 74.7980775 L 1384 74.7980775 1381 80.7980775 Z"></path>
                                        <path fill="#1E90FF"
                                              d="M 1194 46.67391000000001 L 1200 46.67391000000001 1197 52.67391000000001 Z"></path>
                                        <path fill="#1E90FF"
                                              d="M 1010.375 70.76512 L 1016.375 70.76512 1013.375 76.76512 Z"
                                              stroke-width="1"></path>
                                        <path fill="#1E90FF"
                                              d="M 826.125 75.316095 L 832.125 75.316095 829.125 81.316095 Z"
                                              stroke-width="1"></path>
                                        <path fill="#1E90FF"
                                              d="M 641 75.8069425 L 647 75.8069425 644 81.8069425 Z"></path>
                                        <path fill="#1E90FF"
                                              d="M 457 81.73214750000001 L 463 81.73214750000001 460 87.73214750000001 Z"></path>
                                        <path fill="#1E90FF"
                                              d="M 273.375 81.73179 L 279.375 81.73179 276.375 87.73179 Z"
                                              stroke-width="1"></path>
                                        <path fill="#1E90FF"
                                              d="M 89.125 81.733935 L 95.125 81.733935 92.125 87.733935 Z"
                                              stroke-width="1"></path>
                                    </g>
                                    <g class="highcharts-series" visibility="visible" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none"
                                              d="M 92.125 47.704085000000006 C 92.125 47.704085000000006 202.675 80.6377 276.375 80.6377 C 350.075 80.6377 386.925 59.434375 460.625 59.434375 C 534.325 59.434375 571.175 62.40663 644.875 63.5492 C 718.575 64.69177 755.425 65.147225 829.125 65.147225 C 902.825 65.147225 939.675 10.167657500000018 1013.375 10.167657500000018 C 1087.075 10.167657500000018 1123.925 56.17826500000001 1197.625 64.97205000000001 C 1271.325 73.76583500000001 1381.875 73.76583500000001 1381.875 73.76583500000001"
                                              stroke="#FD5B78" stroke-width="3" zIndex="1" stroke-linejoin="round"
                                              stroke-linecap="round"></path>
                                        <path fill="none"
                                              d="M 82.125 47.704085000000006 L 92.125 47.704085000000006 C 92.125 47.704085000000006 202.675 80.6377 276.375 80.6377 C 350.075 80.6377 386.925 59.434375 460.625 59.434375 C 534.325 59.434375 571.175 62.40663 644.875 63.5492 C 718.575 64.69177 755.425 65.147225 829.125 65.147225 C 902.825 65.147225 939.675 10.167657500000018 1013.375 10.167657500000018 C 1087.075 10.167657500000018 1123.925 56.17826500000001 1197.625 64.97205000000001 C 1271.325 73.76583500000001 1381.875 73.76583500000001 1381.875 73.76583500000001 L 1391.875 73.76583500000001"
                                              stroke-linejoin="round" visibility="visible"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)" style="">
                                        <path fill="#FD5B78"
                                              d="M 1381 70.76583500000001 C 1384.996 70.76583500000001 1384.996 76.76583500000001 1381 76.76583500000001 C 1377.004 76.76583500000001 1377.004 70.76583500000001 1381 70.76583500000001 Z"></path>
                                        <path fill="#FD5B78"
                                              d="M 1197 61.97205000000001 C 1200.996 61.97205000000001 1200.996 67.97205000000001 1197 67.97205000000001 C 1193.004 67.97205000000001 1193.004 61.97205000000001 1197 61.97205000000001 Z"></path>
                                        <path fill="#FD5B78"
                                              d="M 1013 7.1676575000000184 C 1016.996 7.1676575000000184 1016.996 13.167657500000018 1013 13.167657500000018 C 1009.004 13.167657500000018 1009.004 7.1676575000000184 1013 7.1676575000000184 Z"></path>
                                        <path fill="#FD5B78"
                                              d="M 829.125 62.147225000000006 C 833.121 62.147225000000006 833.121 68.147225 829.125 68.147225 C 825.129 68.147225 825.129 62.147225000000006 829.125 62.147225000000006 Z"
                                              stroke-width="1"></path>
                                        <path fill="#FD5B78"
                                              d="M 644.875 60.5492 C 648.871 60.5492 648.871 66.5492 644.875 66.5492 C 640.879 66.5492 640.879 60.5492 644.875 60.5492 Z"
                                              stroke-width="1"></path>
                                        <path fill="#FD5B78"
                                              d="M 460.625 54.434375 C 467.285 54.434375 467.285 64.434375 460.625 64.434375 C 453.965 64.434375 453.965 54.434375 460.625 54.434375 Z"
                                              stroke="#FFFFFF" stroke-width="1"></path>
                                        <path fill="#FD5B78"
                                              d="M 276 77.6377 C 279.996 77.6377 279.996 83.6377 276 83.6377 C 272.004 83.6377 272.004 77.6377 276 77.6377 Z"></path>
                                        <path fill="#FD5B78"
                                              d="M 92 44.704085000000006 C 95.996 44.704085000000006 95.996 50.704085000000006 92 50.704085000000006 C 88.004 50.704085000000006 88.004 44.704085000000006 92 44.704085000000006 Z"></path>
                                    </g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#FF84BA" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#f3715c" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#FF0090" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#BF0A10" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                    <g class="highcharts-series" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-1)">
                                        <path fill="none" d="M 0 0" stroke="#663399" stroke-width="2" zIndex="1"
                                              stroke-linejoin="round" stroke-linecap="round"></path>
                                        <path fill="none" d="M 0 0" stroke-linejoin="round" visibility="hidden"
                                              stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2"
                                              class=" highcharts-tracker" style=""></path>
                                    </g>
                                    <g class="highcharts-markers highcharts-tracker" visibility="hidden" zIndex="0.1"
                                       transform="translate(10,10) scale(1 1)" clip-path="url(#highcharts-2)"
                                       style=""></g>
                                </g>
                                <g class="highcharts-legend" zIndex="7" transform="translate(429,233)">
                                    <rect x="0" y="0" width="693" height="29" strokeWidth="0" fill="#FFFFFF"
                                          visibility="visible"></rect>
                                    <g zIndex="1">
                                        <g>
                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC"
                                                      d="M 1.5 8 C 5.496 8 5.496 14 1.5 14 C -2.496 14 -2.496 8 1.5 8 Z"></path>
                                                <text x="8"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2" y="15">展现量
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(72,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M 1.5 8 L 4.5 11 1.5 14 -1.5 11 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">点击量
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1" transform="translate(136,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M -1.5 8 L 4.5 8 4.5 14 -1.5 14 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">PPC
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(185.5625,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M 1.5 8 L 4.5 14 -1.5 14 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">点击率
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(249.5625,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#1E90FF"
                                                      stroke-width="2"></path>
                                                <path fill="#1E90FF" d="M -1.5 8 L 4.5 8 1.5 14 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#333333;font-size:12px;font-weight:normal;cursor:pointer;fill:#333333;"
                                                      text-anchor="start" zIndex="2">总花费
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(313.5625,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#FD5B78"
                                                      stroke-width="2"></path>
                                                <path fill="#FD5B78"
                                                      d="M 1.5 8 C 5.496 8 5.496 14 1.5 14 C -2.496 14 -2.496 8 1.5 8 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#333333;font-size:12px;font-weight:normal;cursor:pointer;fill:#333333;"
                                                      text-anchor="start" zIndex="2">成交额
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(377.5625,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M 1.5 8 L 4.5 11 1.5 14 -1.5 11 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">成交量
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(441.5625,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M -1.5 8 L 4.5 8 4.5 14 -1.5 14 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">收藏量
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(505.5625,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M 1.5 8 L 4.5 14 -1.5 14 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">ROI
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(553.921875,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC" d="M -1.5 8 L 4.5 8 1.5 14 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">转化率
                                                </text>
                                            </g>
                                            <g class="highcharts-legend-item" zIndex="1"
                                               transform="translate(617.921875,3)">
                                                <path fill="none" d="M 0 11 L 3 11" stroke="#CCC"
                                                      stroke-width="2"></path>
                                                <path fill="#CCC"
                                                      d="M 1.5 8 C 5.496 8 5.496 14 1.5 14 C -2.496 14 -2.496 8 1.5 8 Z"></path>
                                                <text x="8" y="15"
                                                      style="color:#CCC;font-size:12px;font-weight:normal;cursor:pointer;fill:#CCC;"
                                                      text-anchor="start" zIndex="2">购物车总数
                                                </text>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7">
                                    <text x="100.125"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 100.125 191)" y="191"
                                          opacity="1">
                                        <tspan>10-05</tspan>
                                    </text>
                                    <text x="284.375"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 284.375 191)" y="191"
                                          opacity="1">
                                        <tspan>10-06</tspan>
                                    </text>
                                    <text x="468.625"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 468.625 191)" y="191"
                                          opacity="1">
                                        <tspan>10-07</tspan>
                                    </text>
                                    <text x="652.875"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 652.875 191)" y="191"
                                          opacity="1">
                                        <tspan>10-08</tspan>
                                    </text>
                                    <text x="837.125"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 837.125 191)" y="191"
                                          opacity="1">
                                        <tspan>10-09</tspan>
                                    </text>
                                    <text x="1021.375"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 1021.375 191)" y="191"
                                          opacity="1">
                                        <tspan>10-10</tspan>
                                    </text>
                                    <text x="1205.625"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 1205.625 191)" y="191"
                                          opacity="1">
                                        <tspan>10-11</tspan>
                                    </text>
                                    <text x="1389.875"
                                          style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:277px;text-overflow:ellipsis;"
                                          text-anchor="start" transform="translate(0,0) rotate(30 1389.875 191)" y="191"
                                          opacity="1">
                                        <tspan>实时数据</tspan>
                                    </text>
                                </g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"></g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"></g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"></g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7">
                                    <text x="1499"
                                          style="color:#1E90FF;cursor:default;font-size:11px;fill:#1E90FF;width:502px;text-overflow:clip;"
                                          text-anchor="start" transform="translate(0,0)" y="156" opacity="1">0元
                                    </text>
                                    <text x="1499"
                                          style="color:#1E90FF;cursor:default;font-size:11px;fill:#1E90FF;width:502px;text-overflow:clip;"
                                          text-anchor="start" transform="translate(0,0)" y="85" opacity="1">2000元
                                    </text>
                                    <text x="1499"
                                          style="color:#1E90FF;cursor:default;font-size:11px;fill:#1E90FF;width:502px;text-overflow:clip;"
                                          text-anchor="start" transform="translate(0,0)" y="13" opacity="1">4000元
                                    </text>
                                </g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"></g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"></g>
                                <g class="highcharts-tooltip" zIndex="8"
                                   style="cursor:default;padding:0;white-space:nowrap;" transform="translate(412,85)"
                                   opacity="1" visibility="visible">
                                    <path fill="none"
                                          d="M 3.5 0.5 L 52.5 0.5 58.5 -5.5 64.5 0.5 114 0.5 C 117.5 0.5 117.5 0.5 117.5 3.5 L 117.5 61.5 C 117.5 64.5 117.5 64.5 114.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                          isShadow="true" stroke="black" stroke-opacity="0.049999999999999996"
                                          stroke-width="5" transform="translate(1, 1)" width="117" height="64"></path>
                                    <path fill="none"
                                          d="M 3.5 0.5 L 52.5 0.5 58.5 -5.5 64.5 0.5 114 0.5 C 117.5 0.5 117.5 0.5 117.5 3.5 L 117.5 61.5 C 117.5 64.5 117.5 64.5 114.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                          isShadow="true" stroke="black" stroke-opacity="0.09999999999999999"
                                          stroke-width="3" transform="translate(1, 1)" width="117" height="64"></path>
                                    <path fill="none"
                                          d="M 3.5 0.5 L 52.5 0.5 58.5 -5.5 64.5 0.5 114 0.5 C 117.5 0.5 117.5 0.5 117.5 3.5 L 117.5 61.5 C 117.5 64.5 117.5 64.5 114.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                          isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1"
                                          transform="translate(1, 1)" width="117" height="64"></path>
                                    <path fill="rgba(249, 249, 249, .85)"
                                          d="M 3.5 0.5 L 52.5 0.5 58.5 -5.5 64.5 0.5 114 0.5 C 117.5 0.5 117.5 0.5 117.5 3.5 L 117.5 61.5 C 117.5 64.5 117.5 64.5 114.5 64.5 L 3.5 64.5 C 0.5 64.5 0.5 64.5 0.5 61.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                          stroke="#FD5B78" stroke-width="1"></path>
                                    <text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="20">
                                        <tspan>10-07日</tspan>
                                        <tspan x="8" dy="15">总花费 1629.87元</tspan>
                                        <tspan x="8" dy="15">成交额 2337.5元</tspan>
                                    </text>
                                </g>
                                <text x="1541" text-anchor="end" zIndex="8"
                                      style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="272"></text>
                            </svg>
                        </div>
                    </div>
                </div>
            </article>
            <aside>
                <div class="box" id="vip_center">
                    <header>
                        <div class="line_box">
                            <span class="title">会员信息</span>
                            <a href="http://w01.ztcjl.com/web/vip_home/" class="sub">会员中心</a>
                        </div>
                    </header>
                    <div>
                        <ul>
                            <li>
                                <span class="title">订购版本</span>
                                <span class="msg"><?=$store->subscribe->item_code?></span>
                            </li>
                            <li>
                                <span class="title">剩余时间</span> 
                                <span class="msg">14天</span>
                                <a class="btn btn-sm btn-primary r" href="http://w01.ztcjl.com/web/upgrade_suggest/"
                                   target="_blank">续订优惠</a>
                            </li>
                            <li>
                                <span class="title">账户余额</span> 
                                <span class="msg">995.77元</span>
                                <button class="btn btn-primary btn-sm" id="btn_recharge">立即充值</button>
                            </li>
                            <li>
                                <span class="title">会员积分</span> 
                                <span class="msg point_count">1000</span>

                                <button class="btn btn-sm btn-primary" id="sign_point"><i class="iconfont mr5"></i>签 &nbsp; 到
                                </button>


                            </li>
                        </ul>
                    </div>
                </div>

                <div class="box" id="common_msg">
                    <header>
                        <div class="line_box">
                            <span class="title">公告信息</span>
                        </div>
                    </header>
                    <div class="right_notice_list">
                        <ul>

                            <li class="right_notice_link main_ad" ad_id="42">
                                <a class="right_notice_title" href="javascript:;" target="_blank">
                                    10月12日精灵更新公告, 宝贝新增移动端限价
                                </a>
                                <time>(今天 20:17)</time>

                                <a href="javascript:;"><i class="iconfont base_color f20"></i></a>

                                <input type="hidden" value="精灵于10月12号晚上发布，更新内容如下：&lt;br/&gt;&lt;br/&gt;
1）&lt;span class=&quot;b&quot;&gt;宝贝新增移动端限价&lt;/span&gt;：托管宝贝、计划，可分别设置PC端限价、移动端限价！&lt;br/&gt;&lt;br/&gt;
2）&lt;span class=&quot;b&quot;&gt;优化抢排名算法&lt;/span&gt;：再次提高抢排名成功率！&lt;br/&gt;&lt;br/&gt;
3）&lt;span class=&quot;b&quot;&gt;长尾计划和roi计划能够像重点计划一样针对单个宝贝单独设置限价。&lt;/span&gt;&lt;br/&gt;&lt;br/&gt;
4）&lt;span class=&quot;b&quot;&gt;其他小优化。&lt;/span&gt;&lt;br/&gt;&lt;br/&gt;">
                            </li>

                            <li class="right_notice_link main_ad" ad_id="26">
                                <a class="right_notice_title" href="javascript:;" target="_blank">
                                    装修设计提升点击率 点击专享折扣
                                </a>
                                <time>(202天前)</time>

                                <input type="hidden"
                                       value="&lt;a href=&quot;aliim:sendmsg?uid=cntaobao&amp;amp;siteid=cntaobao&amp;amp;touid=cntaobao派生视觉&quot;&gt;&lt;img src=&quot;https://img.alicdn.com/imgextra/i1/836440495/TB29.yDopXXXXcNXXXXXXXXXXXX-836440495.jpg&quot; style=&quot;width:750px&quot;/&gt;&lt;/a&gt;">
                            </li>

                        </ul>
                    </div>
                </div>

            </aside>
        </div>

        <div class="box">
            <header>
                <div class="line_box">
                    <span class="title">计划列表</span>

                    <div class="dtr_picker_warp">
                        <span class="tip" data-toggle="dtr_picker" id="select_campaign_days"
                              style="display: none;">过去七天</span>
                        <button type="button"
                                class="comiseo-daterangepicker-triggerbutton ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-secondary comiseo-daterangepicker-bottom"
                                id="drp_autogen1" role="button"><span class="ui-button-text">过去7天</span><span
                                class="ui-button-icon-secondary ui-icon ui-icon-triangle-1-s"></span></button>
                    </div>
                </div>
                <div class="operate">
                    <button class="btn btn-default btn-sm update_camp" mode="1">参与推广</button>
                    <button class="btn btn-default btn-sm update_camp" mode="0">暂停推广</button>
                    <button class="btn btn-default btn-sm js_create_camp">新建计划</button>
                    <!--                 <div class="show_more_warp">
                                        <span class="tip" data-target="campaign_table" data-toggle="show_more">更多数据</span>
                                    </div> -->
                </div>
            </header>
            <div>
                <div id="campaign_table_wrapper" class="dataTables_wrapper" role="grid"></div>
                <table class="table table-bordered icon_hover_show table-hover dataTable" id="campaign_table">
                    <thead>
                    <tr class="h30" role="row">
                        <th class="choose_column sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label="



                      ">
                            <div>
                                <input type="checkbox" class="all">
                            </div>
                        </th>
                        <th class="w230 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="

                            计划名称
                            细分

                      ">
                            <div>
                                计划名称
                                <a id="show_subdivide_all" class="r base_color" href="javascript:;"><i
                                        class="iconfont mr5"></i>细分</a>
                            </div>
                        </th>
                        <th data-active="budget" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label="日限额">
                            <div>日限额</div>
                        </th>
                        <th data-active="platform" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label="投放平台">
                            <div>投放平台</div>
                        </th>
                        <th data-active="discount" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label="分时折扣">
                            <div>分时折扣</div>
                        </th>
                        <th data-active="imp" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="展现量: activate to sort column ascending">
                            <div>展现量</div>
                        </th>
                        <th data-active="click" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="点击量: activate to sort column ascending">
                            <div>点击量</div>
                        </th>
                        <th data-active="ctr" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="点击率: activate to sort column ascending">
                            <div>点击率</div>
                        </th>
                        <th data-active="cost" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="总花费: activate to sort column ascending">
                            <div>总花费</div>
                        </th>
                        <th data-active="ppc" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="PPC: activate to sort column ascending">
                            <div>PPC</div>
                        </th>
                        <th data-active="favcount" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="收藏量: activate to sort column ascending">
                            <div>收藏量</div>
                        </th>
                        <th data-active="carttotal" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="购物车数: activate to sort column ascending">
                            <div>购物车数</div>
                        </th>
                        <th data-active="paycount" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="成交量: activate to sort column ascending">
                            <div>成交量</div>
                        </th>
                        <th data-active="cov" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="转化率: activate to sort column ascending">
                            <div>转化率</div>
                        </th>
                        <th data-active="true" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="成交额: activate to sort column ascending">
                            <div>成交额</div>
                        </th>
                        <th data-active="roi" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="campaign_table" rowspan="1" colspan="1"
                            aria-label="ROI: activate to sort column ascending">
                            <div>ROI</div>
                        </th>
                        <th data-active="flag" class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label="状态">
                            <div>状态</div>
                        </th>
                        <th class="tc sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="操作">
                            <div>操作</div>
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <?php
                    foreach($store->campaigns as $campaign){
                        echo $this->render("/campaign/_campaign",["campaign"=>$campaign]);
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <div class="auto bg_white tc mt20" id="show_bottom_banner" ad_id="27">
        <div id="bottom_banner_content" class="pct100">

            <a href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89"><img
                    id="test_img" class="pct100 pl30 pr30"
                    src="<?= \yii\helpers\Url::to("origin/images/TB2ib2hnXXXXXblXpXXXXXXXXXX-836440495.jpg") ?>"></a>

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
<div class="ui-front comiseo-daterangepicker-mask" style="display: none;"></div>
<div class="comiseo-daterangepicker comiseo-daterangepicker-right ui-widget ui-widget-content ui-corner-all ui-front"
     style="display: none; left: 0px; top: 26px;">
    <div class="comiseo-daterangepicker-main ui-widget-content">
        <div class="comiseo-daterangepicker-presets">
            <ul id="ui-id-16" class="ui-menu ui-widget ui-widget-content" role="menu" tabindex="0">
                <li class="ui-menu-item" id="ui-id-17" tabindex="-1" role="menuitem"><a
                        href="http://w01.ztcjl.com/web/web_home/#">昨天</a></li>
                <li class="ui-menu-item" id="ui-id-18" tabindex="-1" role="menuitem"><a
                        href="http://w01.ztcjl.com/web/web_home/#">过去3天</a></li>
                <li class="ui-menu-item" id="ui-id-19" tabindex="-1" role="menuitem"><a
                        href="http://w01.ztcjl.com/web/web_home/#">过去7天</a></li>
                <li class="ui-menu-item" id="ui-id-20" tabindex="-1" role="menuitem"><a
                        href="http://w01.ztcjl.com/web/web_home/#">过去15天</a></li>
                <li class="ui-menu-item" id="ui-id-21" tabindex="-1" role="menuitem"><a
                        href="http://w01.ztcjl.com/web/web_home/#">过去30天</a></li>
                <li class="ui-menu-item" id="ui-id-22" tabindex="-1" role="menuitem"><a
                        href="http://w01.ztcjl.com/web/web_home/#">上个月</a></li>
            </ul>
        </div>
        <div class="comiseo-daterangepicker-calendar ui-widget-content hasDatepicker" id="dp1476280642993">
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
</body>
</html>
