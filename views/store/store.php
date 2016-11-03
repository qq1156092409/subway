<?php
use \yii\helpers\Url;
use yii\web\View;
use \app\extensions\custom\yii\JsManager;
use yii\helpers\Json;

/**
 * @var $this View
 */
JsManager::instance()->register("js/yii.store.js");

$this->beginPage();
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
        <div id="site_nav">
            <a href="http://w01.ztcjl.com/web/web_home" class="logo">
                <img src="<?=Url::to("origin/images/logo.png")?>" alt="">
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
                            <td>PPC <i class="iconfont f14" data-toggle="tooltip" data-placement="top"
                                            data-trigger="hover" title="" data-original-title="平均点击花费"></i>　
                            </td>
                            <td>购物车总数</td>
                        </tr>
                        <tr class="data">
                            <td class="b">￥<?=$totalBase->costYuan?></td>
                            <td><?=$totalBase->impressions?></td>
                            <td><?=$totalBase->click?></td>
                            <td><?=$totalBase->ctr?>%</td>
                            <td><?=$totalBase->cpcYuan?></td>
                            <td><?=$totalEffect->carttotal?></td>
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
                            <td class="b">
                                <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title="">
                                    ￥<span class="pay"><?=$totalEffect->payTotalYuan?></span>
                                </span>
                            </td>
                            <td>
                                <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""><?=$totalEffect->favTotal?></span>
                            </td>
                            <td>
                                <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""><?=$totalEffect->payCountTotal?></span>
                            </td>
                            <td><?=round($totalBase->click?$totalEffect->payCountTotal*100/$totalBase->click:0,2)?>%</td>
                            <td><?=round($totalBase->costYuan?$totalEffect->payTotalYuan/$totalBase->costYuan:0,2)?></td>
                            <td><?=round($totalEffect->payCountTotal?$totalEffect->payTotalYuan/$totalEffect->payCountTotal:0,2)?></td>
                        </tr>
                        </tbody>
                    </table>

                    <div id="account_char" class="pct100" data-highcharts-chart="0">
                        <script>
                            var option={
                                title: {
                                    text: 'ECharts 入门示例'
                                },
                                tooltip: {},
                                legend: {
                                    data:['销量']
                                },
                                xAxis: {
                                    data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
                                },
                                yAxis: {},
                                series: [{
                                    name: '销量',
                                    type: 'bar',
                                    data: [5, 20, 36, 10, 10, 20]
                                }]
                            };
                        </script>
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
                                <span class="msg"><?=$store->subscribe->deadlineLeft?>天</span>
                                <a class="btn btn-sm btn-primary r" href="http://w01.ztcjl.com/web/upgrade_suggest/"
                                   target="_blank">续订优惠</a>
                            </li>
                            <li>
                                <span class="title">账户余额</span> 
                                <span class="msg"><?=$store->balance->balanceYuan?>元</span>
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
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage()?>