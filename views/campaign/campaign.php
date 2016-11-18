<?php
use yii\helpers\Url;
use app\models\Campaign;
use yii\web\View;
use app\extensions\custom\yii\JsManager;
use app\models\multiple\DataReport;

/**
 * @var $campaign Campaign
 * @var $store Store
 * @var $reports DataReport[]
 * @var $rtrpt DataReport
 * @var $this View
 */
JsManager::instance()->registers(["js/yii.campaign.js"]);

?>
<section class="container-fluid" id="main-page" data-page="campaign-index" data-id="<?=$campaign->campaign_id?>">
    <ol class="breadcrumb">
        <li><a href="http://w01.ztcjl.com/web/web_home">首页</a></li>
        <li class="dropdown" id="select_camp">
            <a class="dropdown-toggle w200" href="javascript:void(0)">
                <?=$campaign->campaignSetting?"自动":"手动"?>：
                <?=$campaign->title?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu ml20">
                <?php foreach ($store->campaigns as $campaignOne){ ?>
                    <li><a value="<?=$campaignOne->campaign_id?>" href="<?=Url::to(["campaign/index","id"=>$campaignOne->campaign_id])?>">
                            <span class="label label-gray f12"><?=$campaignOne->campaignSetting?"自动":"手动"?></span>
                            <?=$campaignOne->title?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    </ol>
    <div class="main_rpt_warp " id="campaign_warp">
        <article class="box">
            <header>
                <div class="line_box">
                    <span class="title">计划报表</span>

                    <div class="dtr_picker_warp">
                        <span class="tip" data-toggle="dtr_picker" id="select_days" style="display: none;"></span>
                        <button type="button"
                                class="comiseo-daterangepicker-triggerbutton ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-secondary comiseo-daterangepicker-bottom"
                                id="drp_autogen0" role="button"><span class="ui-button-text">过去7天</span><span
                                class="ui-button-icon-secondary ui-icon ui-icon-triangle-1-s"></span></button>
                    </div>

                    <span id="budget" class="hide">700</span>
                    <a class="btn btn-default btn-sm mt-3"><span class="edit_camp_price" type="budget" data-budget="700"
                                                                 data-smooth="0">设置日限额</span></a>

                    <button class="btn btn-default btn-sm edit_platform mt-3">设置投放平台</button>
                    <button class="btn btn-default btn-sm edit_schedule mt-3">设置分时折扣</button>
                    <button class="btn btn-default btn-sm edit_area mt-3">设置投放地域</button>
                    <a href="javascript:;" id="campaign_detail" class="sub">查看明细</a>
                </div>
            </header>
            <div>
                <div class="pl12 pr12">
                    <table class="rt_rpt">
                        <tbody>
                        <tr>
                            <td>实时数据：</td>
                            <td>花费：357.65元</td>
                            <td>展现量：11125</td>
                            <td>点击量：555</td>
                            <td>点击率：4.99%</td>
                            <td>PPC：0.64元</td>
                            <td>购物车总数：50</td>
                            <td>成交额：<span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                          data-original-title="直接成交金额: 228.36<br></span>间接成交金额: 54.90">283.26</span>元
                            </td>
                            <td>收藏量：<span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                          data-original-title="店铺收藏数: 2<br></span>宝贝收藏数: 48">50</span>次
                            </td>
                            <td>成交量：<span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                          data-original-title="直接成交笔数: 4<br></span>间接成交笔数: 1">5</span>笔
                            </td>
                            <td class="w30 tr">
                                <div class="rel update_cache" data-toggle="tooltip" data-placement="top"
                                     data-trigger="hover" title=""
                                     data-original-title="系统每5分钟自动刷新一次，点击图标会立即刷新。<br></div>实时数据成交低不要急，有些点击不会马上转化的哦">
                                    <i class="iconfont f24 dib lh30 b vh"></i>
                                    <!-- 	        <i class="iconfont f24 lh30 abs r0 b clock-long-hand">&#xe64e;</i>
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
                        <td class="b">￥2103.85</td>
                        <td>60092</td>
                        <td>3093</td>
                        <td>5.15%</td>
                        <td>0.68</td>
                        <td>248</td>
                    </tr>
                    <tr>
                        <td>成交额</td>
                        <td>收藏量</td>
                        <td>成交量</td>
                        <td>转化率</td>
                        <td>ROI&nbsp;<i class="iconfont f14" data-toggle="tooltip" data-placement="top"
                                        data-trigger="hover" title="" data-original-title="投资回报率"></i></td>
                        <td>成交量单价&nbsp;<i class="iconfont f14" data-toggle="tooltip" data-placement="top"
                                          data-trigger="hover" title="" data-original-title="成交量单价 = 成交额/成交量"></i></td>
                    </tr>
                    <tr class="data">
                        <td class="b"><span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                            data-original-title="直接成交金额: 1781.30<br></span>间接成交金额: 959.60">￥<span
                                    class="pay">2740.90</span></span></td>
                        <td><span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                  data-original-title="店铺收藏数: 20<br></span>宝贝收藏数: 269">
      289
      </span></td>
                        <td><span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""
                                  data-original-title="直接成交笔数: 31<br></span>间接成交笔数: 16">47</span></td>
                        <td>1.52%</td>
                        <td>1.30</td>
                        <td>58.32</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </article>


    </div>

    <div class="box">
        <header>
            <div class="line_box">
                <span class="title">宝贝列表
                (共<span class="adgroup_count">4</span>个)</span>

            </div>
            <div class="operate">
                <button class="btn btn-default btn-sm add_adgroup">添加宝贝</button>
                <button class="btn btn-default btn-sm" id="show_kw">显示关键词数</button>
                <button class="btn btn-default btn-sm" id="show_cr">显示创意数</button>
                <div class="pull-right">
                    <div class="form-inline" autocomplete="on">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="select_warp ml0" id="search_status_type">
                                    <span class="tip form" data-toggle="dropdown">推广状态</span>
                                    <ul class="dropdown-menu">
                                        <li data-value=""><span>全部</span></li>
                                        <li data-value="online"><span>推广中</span></li>
                                        <li data-value="offline"><span>已暂停</span></li>
                                        <li data-value="audit_offline"><span>违规下架</span></li>
                                        <li data-value="crm_offline"><span>CRM下线</span></li>
                                    </ul>
                                </div>
                            </div>
                            &nbsp;&nbsp;

                            <div class="input-group">
                                <div class="select_warp ml0" id="search_follow_type">
                                    <span class="tip form" data-toggle="dropdown">宝贝分类</span>
                                    <ul class="dropdown-menu">
                                        <li data-value="-1"><span>全部</span></li>
                                        <li data-value="1"><span>关注宝贝</span></li>
                                        <li data-value="0"><span>普通宝贝</span></li>
                                    </ul>
                                </div>
                            </div>
                            &nbsp;&nbsp;
                            <div class="input-group">
                                <input type="text" class="form-control" autocomplete="on" id="search_val"
                                       placeholder="输入宝贝名称">

                                <div class="btn input-group-addon" id="search_btn"><i class="iconfont"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="ad-group-table">
            <div id="goods_table_wrapper" class="dataTables_wrapper" role="grid" style="position: relative;">
                <table class="table table-bordered icon_hover_show table-hover box_fix_fixedHeader dataTable"
                       id="goods_table">
                    <thead>
                    <tr role="row">
                        <th class="choose_column sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label=""><input type="checkbox" class="select-all"></th>
                        <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="宝贝图片">
                            <div>宝贝图片</div>
                        </th>
                        <th class="w280 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
            标题
            细分
          ">
                            <div>标题
                                <a id="show_subdivide_all" class="r base_color b" href="javascript:;"><i
                                        class="iconfont mr5"></i>细分</a></div>
                        </th>
                        <th data-active="impressions" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="展现量: activate to sort column ascending">
                            <div>展现量</div>
                        </th>
                        <th data-active="click" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="点击量: activate to sort column ascending">
                            <div>点击量</div>
                        </th>
                        <th data-active="ctr" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="点击率: activate to sort column ascending">
                            <div>点击率</div>
                        </th>
                        <th data-active="cost" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="总花费: activate to sort column ascending">
                            <div>总花费</div>
                        </th>
                        <th data-active="ppc" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="PPC: activate to sort column ascending">
                            <div>PPC</div>
                        </th>
                        <th data-active="favcount" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="收藏量: activate to sort column ascending">
                            <div>收藏量</div>
                        </th>
                        <th data-active="carttotal" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="购物车数: activate to sort column ascending">
                            <div>购物车数</div>
                        </th>
                        <th data-active="paycount" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="成交量: activate to sort column ascending">
                            <div>成交量</div>
                        </th>
                        <th data-active="conv" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="转化率: activate to sort column ascending">
                            <div>转化率</div>
                        </th>
                        <th data-active="pay" class="sorting_desc" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1" aria-sort="descending"
                            aria-label="成交额: activate to sort column ascending">
                            <div>成交额</div>
                        </th>
                        <th data-active="roi" class="sorting" role="columnheader" tabindex="0"
                            aria-controls="goods_table" rowspan="1" colspan="1"
                            aria-label="ROI: activate to sort column ascending">
                            <div>ROI</div>
                        </th>
                        <th class="w120 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="推广状态
          ">
                            <div>推广状态</div>
                        </th>
                        <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="优化状态
          ">
                            <div>优化状态</div>
                        </th>
                        <th class="w80 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="操作">
                            操作
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    <tr class="adg_tr  odd" data-id="35560990" adgroup_id="715202952" campaign_id="35560990"
                        is_quick_opered="0" cat_id="162205">
                        <td class="check_column vm "><input type="checkbox" class="kid_check" value="715202952"></td>
                        <td class="td-img ">
                            <a class="item_base" target="_blank" href="http://item.taobao.com/item.htm?id=539103908109">

                                <img width="70" height="70"
                                     src="./campaign_files/TB2rygzab2B11BjSsplXXcMDVXa_!!409358473.jpg_70x70.jpg">

                            </a>
                        </td>
                        <td class="item_dark ">

        <span class="title w280">
            <a id="show_title_35560990" class="item_base to_optimize" target="_blank" adgroup_id="715202952"
               href="javascript:;">洁儿林韩国百搭秋冬街拍水洗复古宽松阔腿裤撕边牛仔裤卷边长裤女</a>
            &nbsp;￥<span class="item_price">69.00</span>
            <span class="badge r count-cr hide mt5">0</span>
            <span class="badge r count-kw hide mt5 mr5">0</span>
            <span class="state_opt r mr10">
                <i class="iconfont mr5 show_chart hover_show"></i>
                <i class="iconfont show_subdivide hover_show"></i>&nbsp;&nbsp;
                <i class="iconfont set_follow_status hover_show" data-toggle="tooltip" data-placement="top" title=""
                   value="0" data-original-title="点击可设置为关注宝贝"></i>
            </span>
        </span>
                        </td>
                        <td class=" "><span class="hide">27293</span>27293</td>
                        <td class=" "><span class="hide">1506</span>1506</td>
                        <td class=" "><span class="hide">5.52</span>5.52%</td>
                        <td class=" "><span class="hide">1066.29</span>￥1066.29</td>
                        <td class=" "><span class="hide">0.71</span>￥0.71</td>
                        <td class=" "><span class="hide">168</span>168</td>
                        <td class=" "><span class="hide">125</span>125</td>
                        <td class=" "><span class="hide">34</span>34</td>
                        <td class=" "><span class="hide">2.26</span>2.26%</td>
                        <td class=" sorting_1"><span class="hide">1964.80</span>￥1964.80</td>
                        <td class=" "><span class="hide">1.84</span>1.84</td>
                        <td class="vt w120 ">

                            <span class="hide sort_online">1</span>
                            <span class="lbl_online">推广中&nbsp;&nbsp;</span>
                            <a href="javascript:;" class="hover_show switch_status">暂停</a>

                            <a href="javascript:;" class="hover_show del_good">删除</a>
                            <br>
                            移动折扣： <span class="adg_mobdiscount" campaign_id="35560990">190% </span>
                            <i class="iconfont edit_adg_mobdiscount"></i>

                        </td>
                        <td class="vt item_base " style="width: 125px;">

                            <span class="hide sort_value">3</span>
                            <span class="opt_status">未托管</span>


        <span class="show_limit_price  hide "><br>
        限价：<span class="limit_price pr5" data-toggle="tooltip" title="" data-original-title="PC端限价">0.00</span><span
                class="mobile_limit_price left_dotted pl5" data-toggle="tooltip" title="" data-original-title="移动端限价">0.00</span></span>
                            <span class="optm_submit_time "><br>目前尚未优化过</span>

                        </td>
                        <td class="w90 opt_url ">
                            <div class="dropdown">
                                <a class="dropdown-toggle to_optimize" href="javascript:;" adgroup_id="715202952">
                                    <span class="dropdown-value"><strong>进入宝贝</strong></span> <span
                                        class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/smart_optimize/715202952" target="_blank">智能优化</a>
                                    </li>
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/bulk_optimize/715202952"
                                            target="_blank">批量优化</a></li>
                                    <li class="mnt_type_false hide "><a
                                            href="http://w01.ztcjl.com/mnt/adgroup_data/715202952"
                                            target="_blank">托管详情</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=715202952"
                                           target="_blank">快速选词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/precise?adgroup_id=715202952"
                                           target="_blank">精准淘词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/title_optimize/?adgroup_id=715202952"
                                           target="_blank">标题优化</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/image_optimize/715202952?t=list"
                                           target="_blank">创意优化</a></li>
                                </ul>
                            </div>

                            <a href="javascript:;" class="onekey" adgroup_id="715202952" campaign_id="35560990">
                                <span class="dropdown-value"><strong>一键优化</strong></span>
                            </a>

                        </td>
                    </tr>
                    <tr class="adg_tr gray even" data-id="35560990" adgroup_id="708756078" campaign_id="35560990"
                        is_quick_opered="0" cat_id="162205">
                        <td class="check_column vm "><input type="checkbox" class="kid_check" value="708756078"></td>
                        <td class="td-img ">
                            <a class="item_base" target="_blank" href="http://item.taobao.com/item.htm?id=537749737884">

                                <img width="70" height="70"
                                     src="./campaign_files/TB2U_fjaWzyQeBjy0FgXXbnsVXa_!!409358473.jpg_70x70.jpg">

                            </a>
                        </td>
                        <td class="item_dark ">

        <span class="title w280">
            <a id="show_title_35560990" class="item_base to_optimize" target="_blank" adgroup_id="708756078"
               href="javascript:;">洁儿林韩国复古绑带橡筋腰头宽松大阔腿裤破洞牛仔裤大码九分裤女</a>
            &nbsp;￥<span class="item_price">79.00</span>
            <span class="badge r count-cr hide mt5">0</span>
            <span class="badge r count-kw hide mt5 mr5">0</span>
            <span class="state_opt r mr10">
                <i class="iconfont mr5 show_chart hover_show"></i>
                <i class="iconfont show_subdivide hover_show"></i>&nbsp;&nbsp;
                <i class="iconfont set_follow_status hover_show" data-toggle="tooltip" data-placement="top" title=""
                   value="0" data-original-title="点击可设置为关注宝贝"></i>
            </span>
        </span>
                        </td>
                        <td class=" "><span class="hide">32798</span>32798</td>
                        <td class=" "><span class="hide">1587</span>1587</td>
                        <td class=" "><span class="hide">4.84</span>4.84%</td>
                        <td class=" "><span class="hide">1037.56</span>￥1037.56</td>
                        <td class=" "><span class="hide">0.65</span>￥0.65</td>
                        <td class=" "><span class="hide">121</span>121</td>
                        <td class=" "><span class="hide">123</span>123</td>
                        <td class=" "><span class="hide">13</span>13</td>
                        <td class=" "><span class="hide">0.82</span>0.82%</td>
                        <td class=" sorting_1"><span class="hide">776.10</span>￥776.10</td>
                        <td class=" "><span class="hide">0.75</span>0.75</td>
                        <td class="vt w120 ">

                            <span class="hide sort_online">0</span>
                            <span class="lbl_online">已暂停&nbsp;&nbsp;</span>
                            <a href="javascript:;" class="hover_show switch_status">开启</a>

                            <a href="javascript:;" class="hover_show del_good">删除</a>
                            <br>
                            移动折扣： <span class="adg_mobdiscount" campaign_id="35560990">155% </span>
                            <i class="iconfont edit_adg_mobdiscount"></i>

                        </td>
                        <td class="vt item_base " style="width: 125px;">

                            <span class="hide sort_value">3</span>
                            <span class="opt_status">未托管</span>


        <span class="show_limit_price  hide "><br>
        限价：<span class="limit_price pr5" data-toggle="tooltip" title="" data-original-title="PC端限价">0.00</span><span
                class="mobile_limit_price left_dotted pl5" data-toggle="tooltip" title="" data-original-title="移动端限价">0.00</span></span>
                            <span class="optm_submit_time "><br>目前尚未优化过</span>

                        </td>
                        <td class="w90 opt_url ">
                            <div class="dropdown">
                                <a class="dropdown-toggle to_optimize" href="javascript:;" adgroup_id="708756078">
                                    <span class="dropdown-value"><strong>进入宝贝</strong></span> <span
                                        class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/smart_optimize/708756078" target="_blank">智能优化</a>
                                    </li>
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/bulk_optimize/708756078"
                                            target="_blank">批量优化</a></li>
                                    <li class="mnt_type_false hide "><a
                                            href="http://w01.ztcjl.com/mnt/adgroup_data/708756078"
                                            target="_blank">托管详情</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=708756078"
                                           target="_blank">快速选词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/precise?adgroup_id=708756078"
                                           target="_blank">精准淘词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/title_optimize/?adgroup_id=708756078"
                                           target="_blank">标题优化</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/image_optimize/708756078?t=list"
                                           target="_blank">创意优化</a></li>
                                </ul>
                            </div>

                            <a href="javascript:;" class="onekey" adgroup_id="708756078" campaign_id="35560990">
                                <span class="dropdown-value"><strong>一键优化</strong></span>
                            </a>

                        </td>
                    </tr>
                    <tr class="adg_tr gray odd" data-id="35560990" adgroup_id="666827402" campaign_id="35560990"
                        is_quick_opered="0" cat_id="162205">
                        <td class="check_column vm "><input type="checkbox" class="kid_check" value="666827402"></td>
                        <td class="td-img ">
                            <a class="item_base" target="_blank" href="http://item.taobao.com/item.htm?id=527952296287">

                                <img width="70" height="70"
                                     src="./campaign_files/TB1lxeTMpXXXXaYXpXXYXGcGpXX_M2.SS2_70x70.jpg">

                            </a>
                        </td>
                        <td class="item_dark ">

        <span class="title w280">
            <a id="show_title_35560990" class="item_base to_optimize" target="_blank" adgroup_id="666827402"
               href="javascript:;">洁儿林春夏复古高腰显瘦显高大口袋鱼尾裤大喇叭裤微喇牛仔长裤女</a>
            &nbsp;￥<span class="item_price">99.00</span>
            <span class="badge r count-cr hide mt5">0</span>
            <span class="badge r count-kw hide mt5 mr5">0</span>
            <span class="state_opt r mr10">
                <i class="iconfont mr5 show_chart hover_show"></i>
                <i class="iconfont show_subdivide hover_show"></i>&nbsp;&nbsp;
                <i class="iconfont set_follow_status hover_show" data-toggle="tooltip" data-placement="top" title=""
                   value="0" data-original-title="点击可设置为关注宝贝"></i>
            </span>
        </span>
                        </td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0.00</span>0.00%</td>
                        <td class=" "><span class="hide">0.00</span>￥0.00</td>
                        <td class=" "><span class="hide">0.00</span>￥0.00</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0.00</span>0.00%</td>
                        <td class=" sorting_1"><span class="hide">0.00</span>￥0.00</td>
                        <td class=" "><span class="hide">0.00</span>0.00</td>
                        <td class="vt w120 ">

                            <span class="hide sort_online">0</span>
                            <span class="lbl_online">已暂停&nbsp;&nbsp;</span>
                            <a href="javascript:;" class="hover_show switch_status">开启</a>

                            <a href="javascript:;" class="hover_show del_good">删除</a>
                            <br>
                            移动折扣： <span class="adg_mobdiscount" campaign_id="35560990">110% </span>
                            <i class="iconfont edit_adg_mobdiscount"></i>

                        </td>
                        <td class="vt item_base " style="width: 125px;">

                            <span class="hide sort_value">3</span>
                            <span class="opt_status">未托管</span>


        <span class="show_limit_price  hide "><br>
        限价：<span class="limit_price pr5" data-toggle="tooltip" title="" data-original-title="PC端限价">0.00</span><span
                class="mobile_limit_price left_dotted pl5" data-toggle="tooltip" title="" data-original-title="移动端限价">0.00</span></span>
                            <span class="optm_submit_time "><br>目前尚未优化过</span>

                        </td>
                        <td class="w90 opt_url ">
                            <div class="dropdown">
                                <a class="dropdown-toggle to_optimize" href="javascript:;" adgroup_id="666827402">
                                    <span class="dropdown-value"><strong>进入宝贝</strong></span> <span
                                        class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/smart_optimize/666827402" target="_blank">智能优化</a>
                                    </li>
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/bulk_optimize/666827402"
                                            target="_blank">批量优化</a></li>
                                    <li class="mnt_type_false hide "><a
                                            href="http://w01.ztcjl.com/mnt/adgroup_data/666827402"
                                            target="_blank">托管详情</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=666827402"
                                           target="_blank">快速选词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/precise?adgroup_id=666827402"
                                           target="_blank">精准淘词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/title_optimize/?adgroup_id=666827402"
                                           target="_blank">标题优化</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/image_optimize/666827402?t=list"
                                           target="_blank">创意优化</a></li>
                                </ul>
                            </div>

                            <a href="javascript:;" class="onekey" adgroup_id="666827402" campaign_id="35560990">
                                <span class="dropdown-value"><strong>一键优化</strong></span>
                            </a>

                        </td>
                    </tr>
                    <tr class="adg_tr gray even" data-id="35560990" adgroup_id="679063142" campaign_id="35560990"
                        is_quick_opered="0" cat_id="162205">
                        <td class="check_column vm "><input type="checkbox" class="kid_check" value="679063142"></td>
                        <td class="td-img ">
                            <a class="item_base" target="_blank" href="http://item.taobao.com/item.htm?id=528744106316">

                                <img width="70" height="70"
                                     src="./campaign_files/TB2PcbslVXXXXXqXpXXXXXXXXXX_!!409358473.jpg_70x70.jpg">

                            </a>
                        </td>
                        <td class="item_dark ">

        <span class="title w280">
            <a id="show_title_35560990" class="item_base to_optimize" target="_blank" adgroup_id="679063142"
               href="javascript:;">洁儿林夏港味复古高腰显瘦显高开衩鱼尾裤大喇叭裤微喇牛仔长裤女</a>
            &nbsp;￥<span class="item_price">69.90</span>
            <span class="badge r count-cr hide mt5">0</span>
            <span class="badge r count-kw hide mt5 mr5">0</span>
            <span class="state_opt r mr10">
                <i class="iconfont mr5 show_chart hover_show"></i>
                <i class="iconfont show_subdivide hover_show"></i>&nbsp;&nbsp;
                <i class="iconfont set_follow_status hover_show" data-toggle="tooltip" data-placement="top" title=""
                   value="0" data-original-title="点击可设置为关注宝贝"></i>
            </span>
        </span>
                        </td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0.00</span>0.00%</td>
                        <td class=" "><span class="hide">0.00</span>￥0.00</td>
                        <td class=" "><span class="hide">0.00</span>￥0.00</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0</span>0</td>
                        <td class=" "><span class="hide">0.00</span>0.00%</td>
                        <td class=" sorting_1"><span class="hide">0.00</span>￥0.00</td>
                        <td class=" "><span class="hide">0.00</span>0.00</td>
                        <td class="vt w120 ">

                            <span class="hide sort_online">0</span>
                            <span class="lbl_online">已暂停&nbsp;&nbsp;</span>
                            <a href="javascript:;" class="hover_show switch_status">开启</a>

                            <a href="javascript:;" class="hover_show del_good">删除</a>
                            <br>
                            移动折扣： <span class="adg_mobdiscount" campaign_id="35560990">110% </span>
                            <i class="iconfont edit_adg_mobdiscount"></i>

                        </td>
                        <td class="vt item_base " style="width: 125px;">

                            <span class="hide sort_value">3</span>
                            <span class="opt_status">未托管</span>


        <span class="show_limit_price  hide "><br>
        限价：<span class="limit_price pr5" data-toggle="tooltip" title="" data-original-title="PC端限价">0.00</span><span
                class="mobile_limit_price left_dotted pl5" data-toggle="tooltip" title="" data-original-title="移动端限价">0.00</span></span>
                            <span class="optm_submit_time "><br>目前尚未优化过</span>

                        </td>
                        <td class="w90 opt_url ">
                            <div class="dropdown">
                                <a class="dropdown-toggle to_optimize" href="javascript:;" adgroup_id="679063142">
                                    <span class="dropdown-value"><strong>进入宝贝</strong></span> <span
                                        class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/smart_optimize/679063142" target="_blank">智能优化</a>
                                    </li>
                                    <li class="mnt_type_true "><a
                                            href="http://w01.ztcjl.com/web/bulk_optimize/679063142"
                                            target="_blank">批量优化</a></li>
                                    <li class="mnt_type_false hide "><a
                                            href="http://w01.ztcjl.com/mnt/adgroup_data/679063142"
                                            target="_blank">托管详情</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=679063142"
                                           target="_blank">快速选词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/select_keyword/precise?adgroup_id=679063142"
                                           target="_blank">精准淘词</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/title_optimize/?adgroup_id=679063142"
                                           target="_blank">标题优化</a></li>
                                    <li><a href="http://w01.ztcjl.com/web/image_optimize/679063142?t=list"
                                           target="_blank">创意优化</a></li>
                                </ul>
                            </div>

                            <a href="javascript:;" class="onekey" adgroup_id="679063142" campaign_id="35560990">
                                <span class="dropdown-value"><strong>一键优化</strong></span>
                            </a>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="select-tool select-fixed" style="display: block;">
                <input type="checkbox" class="select-all">&nbsp;全选&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已选宝贝 <a><strong
                        class="select_rows f20">0</strong></a> 个
                <button class="btn btn-primary btn-sm ml10 batch-opt" opt_type="1">开启推广</button>
                <button class="btn btn-primary btn-sm ml10 batch-opt" opt_type="2">暂停推广</button>
                <button class="btn btn-primary btn-sm ml10 batch-opt" opt_type="3">批量删除</button>

                <!--

                -->
            </div>
        </div>
    </div>
    <div class="page-tool pt10 tr"><span class="pagination l">
    每页显示50条数据，共1页
</span>
        <ul class="pagination r mt10 mb10">
            <input type="hidden" class="current_page" value="1">
            <li page_row="1" class="page_row"><a href="javascript:;">«</a></li>

            <li page_row="1" class="page_row  active"><a href="javascript:;">1</a></li>

            <li page_row="1" class="page_row"><a href="javascript:;">»</a></li>
        </ul>
    </div>
</section>
