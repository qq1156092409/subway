<?php
use yii\helpers\Url;
use app\models\Campaign;
use yii\web\View;
use app\extensions\custom\yii\JsManager;
use app\models\multiple\DataReport;
use app\models\Store;

/**
 * @var $campaign Campaign
 * @var $store Store
 * @var $reports DataReport[]
 * @var $rtrpt DataReport
 * @var $this View
 */
JsManager::instance()->registers([
    "js/yii.campaign.js",
    "js/yii.adgroup.js",
]);

?>
<section class="container-fluid" id="main-page" data-page="campaign-index" data-id="<?=$campaign->campaign_id?>">
    <ol class="breadcrumb">
        <li><a href="<?=Url::to(["/store","id"=>$store->id])?>">首页</a></li>
        <li class="dropdown" id="select_camp">
            <a class="dropdown-toggle w200" href="javascript:void(0)">
                <?=$campaign->isTrusteeship()?"自动":"手动"?>：
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
                            <td>花费：<?=$rtrpt->costYuan()?>元</td>
                            <td>展现量：<?=$rtrpt->impression?></td>
                            <td>点击量：<?=$rtrpt->click?></td>
                            <td>点击率：<?=$rtrpt->ctr*100?>%</td>
                            <td>PPC：<?=$rtrpt->cpcYuan()?>元</td>
                            <td>购物车总数：<?=$rtrpt->carttotal?></td>
                            <td>成交额：<?=$rtrpt->payYuan()?>元</td>
                            <td>收藏量：<?=$rtrpt->favtotal?>次</td>
                            <td>成交量：<?=$rtrpt->paycount?>笔</td>
                            <td class="w30 tr">
                                <div class="rel update_cache" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="">
                                    <i class="iconfont f24 dib lh30 b vh"></i>
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
                        <td class="b">￥<?=$totalReport->costYuan()?></td>
                        <td><?=$totalReport->impression?></td>
                        <td><?=$totalReport->click?></td>
                        <td><?=100*$totalReport->ctr?>%</td>
                        <td><?=$totalReport->cpcYuan()?></td>
                        <td><?=$totalReport->carttotal?></td>
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
                                    ￥<span class="pay"><?=$totalReport->payYuan()?></span>
                                </span>
                        </td>
                        <td>
                            <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""><?=$totalReport->favtotal?></span>
                        </td>
                        <td>
                            <span data-toggle="tooltip" data-placement="top" data-trigger="hover" title=""><?=$totalReport->paycount?></span>
                        </td>
                        <td><?=100*$totalReport->coverage?>%</td>
                        <td><?=$totalReport->roi?></td>
                        <td><?=$totalReport->pay_paycountYuan()?></td>
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
                (共<span class="adgroup_count"><?=$campaign->getAdgroups()->count()?></span>个)</span>
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
                            aria-label=""><input type="checkbox" class="select-all adgroup-check-all"></th>
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
                    <?php
                    if($campaign->adgroups){
                        foreach($campaign->adgroups as $adgroup){
                            echo $this->render("/adgroup/_adgroup",[
                                "adgroup"=>$adgroup,
                            ]);
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="select-tool select-fixed" style="display: block;">
                <input type="checkbox" class="select-all adgroup-check-all">&nbsp;全选&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;已选宝贝
                <a><strong class="select_rows f20 adgroup-check-count">0</strong></a> 个
                <button class="btn btn-primary btn-sm ml10 batch-opt" opt_type="1">开启推广</button>
                <button class="btn btn-primary btn-sm ml10 batch-opt" opt_type="2">暂停推广</button>
                <button class="btn btn-primary btn-sm ml10 batch-opt" opt_type="3">批量删除</button>
            </div>
        </div>
    </div>
</section>
