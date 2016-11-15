<?php
use yii\helpers\Url;
use yii\web\View;
use app\extensions\custom\yii\JsManager;
use app\models\Store;
use app\models\multiple\DataReport;
use \app\models\CustBase;
use \app\models\CustEffect;

/**
 * @var $this View
 * @var $store Store
 * @var $totalBase CustBase
 * @var $totalEffect CustEffect
 */
JsManager::instance()->register("js/yii.store.js");
$this->params["store"]=$store;
$report=new DataReport($totalBase,$totalEffect);
?>
<section class="container-fluid" id="main-page" data-page="store-index" data-refresh-url="<?=Url::to(["/store/index-refresh","id"=>$store->id])?>">
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
                        <td class="b">￥<?=$totalBase->costYuan()?></td>
                        <td><?=$totalBase->impressions?></td>
                        <td><?=$totalBase->click?></td>
                        <td><?=100*$totalBase->ctr?>%</td>
                        <td><?=$totalBase->cpcYuan()?></td>
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
                                    ￥<span class="pay"><?=$totalEffect->payTotalYuan()?></span>
                                </span>
                        </td>
                        <td>
                            <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""><?=$totalEffect->favTotal()?></span>
                        </td>
                        <td>
                            <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""><?=$totalEffect->payCountTotal()?></span>
                        </td>
                        <td><?=100*$report->takeRate()?>%</td>
                        <td><?=$report->roi()?></td>
                        <td><?=round($totalEffect->payCountTotal()?$totalEffect->payTotalYuan()/$totalEffect->payCountTotal():0,2)?></td>
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
                if($store->campaigns){
                    foreach($store->campaigns as $campaign){
                        echo $this->render("/campaign/_campaign",["campaign"=>$campaign]);
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>