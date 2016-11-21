<?php
use yii\helpers\Url;
use app\models\Adgroup;
use yii\web\View;
use app\models\Campaign;
use app\models\Item;
use \app\extensions\custom\yii\JsManager;
/**
 * @var $this View
 * @var $adgroup Adgroup
 * @var $campaign Campaign
 * @var $item Item
 */

JsManager::instance()->registers([
    "js/yii.adgroup.js"
]);
$campaign=$adgroup->campaign;
$item=$adgroup->item;
?>
<div class="w1280 auto">

    <ol class="breadcrumb">
        <li><a href="<?=Url::to(["/store","nick"=>$adgroup->nick])?>">首页</a></li>
        <li>
            <a href="<?=Url::to(["/campaign","id"=>$adgroup->campaign_id])?>" id="campaign_title">
                <?=$campaign->isTrusteeship()?"自动":"手动"?>：
                <?=$campaign->title?>
            </a>
        </li>
        <li class="active">
            <?=$item?$item->title:"-"?>
        </li>
    </ol>


    <div class="alert alert-warning">
        <a href="http://w01.ztcjl.com/web/select_keyword/combine?adgroup_id=715202952#" class="close" data-dismiss="alert">×</a>
        精灵词库已经将淘宝关键词一网打尽，收集了淘宝下拉框，淘宝推荐词、淘宝热搜、TOP20万...所有你能想到的来源，请亲尽情选用。如果选词不准，请点击<a href="javascript:;" class="b" id="select_feedback">[ 这里 ]</a>反馈意见！
    </div>

    <div id="keyword_cart_box" style="height: 888px;">
        <div id="keyword_cart" style="margin-top: 0px;">
            <header class="b">关键词（已有<span id="count_keyword_count"><?=$adgroup->getKeywords()->count()?></span>个）</header>
            <table class="table table-bordered icon_hover_show table-hover">
                <thead>
                <tr>
                    <th class="choose_all_column w20">
                        <input type="checkbox">
                    </th>
                    <th>
                        已选<span class="checked_num">0</span>个，共<span class="total_num">0</span>个
                    </th>
                    <th class="pct20">出价(元）</th>
                </tr>
                </thead>
            </table>
            <div id="scroll_box" style="max-height: 748px;">
                <table class="table">
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="radio">
                <label class="pct80">
                </label>
            </div>
            <div class="bottom_operation" style="visibility: visible;">
        <span class="dropup">
          <button class="btn btn-sm btn-default" data-toggle="dropdown">修改</button>
          <div class="dropdown-menu hold-on-click" id="modify_box">
              <header>初始出价</header>
              <div class="radio">
                  <label>
                      <input type="radio" name="price" value="sys" checked="">
                      系统推荐(不同词出价系数不同)
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="price" value="custom" style="margin-top: 6px;">
                      <input type="text" id="custome_price"> 元固定出价(不推荐)
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="price" value="custom_multiple" style="margin-top: 6px;">
                      <input type="text" id="custome_price_multiple" value="1.00"> 倍关键词市场均价(范围:0.5-2.5)
                  </label>
              </div>
              <div class="radio" style="margin:10px 0 20px 0;">
                  <label class="pct80">
                      <input id="slider_input" type="text" value="100" class="slider_input" name="slider_input" style="display: none;"><span class="jslider jslider_platform jslider-single jslider-limitless"><table><tbody><tr><td><div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i class="v" style="width: 25%;"></i></div><div class="jslider-pointer" style="left: 25%;"></div><div class="jslider-pointer jslider-pointer-to"></div><div class="jslider-label"><span>50</span></div><div class="jslider-label jslider-label-to"><span>250</span></div><div class="jslider-value" style="left: 25%; margin-left: 0px; right: auto;"><span>100</span></div><div class="jslider-value jslider-value-to"><span></span></div><div class="jslider-scale"><span style="left: 0%"><ins style="margin-left: 0px;">0.5</ins></span><span style="left: 25%"><ins style="margin-left: 0px;">1.0</ins></span><span style="left: 50%"><ins style="margin-left: 0px;">1.5</ins></span><span style="left: 75%"><ins style="margin-left: 0px;">2.0</ins></span><span style="left: 100%"><ins style="margin-left: 0px;">2.5</ins></span></div></td></tr></tbody></table></span>
                  </label>
              </div>
              <header>匹配方式</header>
              <div class="radio">
                  <label>
                      <input type="radio" name="match" value="4" checked="">
                      广泛匹配
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="match" value="1">
                      精确匹配
                  </label>
              </div>
              <div class="mt20">
                  <button class="btn btn-primary btn-sm">确定</button>
                  <button class="btn btn-default btn-sm">取消</button>
              </div>
          </div>
        </span>
                <button class="btn btn-sm btn-default" id="remove_cart">删除</button>
                <div class="form-inline dib">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">新词限价(元)</div>
                            <input type="text" class="form-control" value="5.00" data-old="5.00" id="max_price_limit">
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-sm r mt10" id="submit_keyword">确定提交</button>
            </div>
        </div>
    </div>

    <div id="keyword_selecter">
        <ul class="nav nav-tabs" id="select_keyword_nav">
            <li class="active"><a href="javascript:void(0)" data-id="quick" data-toggle="tab">快速选词</a></li>
            <li class=""><a href="javascript:void(0)" data-id="precise" data-toggle="tab">精准淘词</a></li>
            <li class=""><a href="javascript:void(0)" data-id="combine" data-toggle="tab">手工组词</a></li>
            <li class=""><a href="javascript:void(0)" data-id="manual" data-toggle="tab">手工加词</a></li>
        </ul>
        <div class="tab-content bg_white">
            <div class="tab-pane active in" id="quick">
                <div class="top_operation">
              <span class="dropdown">
                <button class="btn btn-default btn-sm" data-toggle="dropdown"><i class="iconfont mr5"></i>批量筛选</button>
                <div class="dropdown-menu hold-on-click mt5 w500">
                    <div class="modal-header p10">
                        <h4>拉动滑竿过滤关键词</h4>
                    </div>
                    <div class="modal-body">
                        <div class="f12 text-info">滑竿越往右，符合条件的关键词越多，但是词的质量会越差</div>
                        <div class="mt20 pr20" id="quick_div_sliders"><div class="layout-slider">
                                <span class="series_name">匹配度</span>
                                <input id="quick_keyword_score" type="slider" name="quickkeyword_score" value="1000;0" data-from="1000" data-to="0" style="display: none;"><span class="jslider jslider_plastic jslider-limitless"><table><tbody><tr><td><div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i class="v" style="left: 0%; width: 100%;"></i></div><div class="jslider-pointer" style="left: 0%;"></div><div class="jslider-pointer jslider-pointer-to" style="left: 100%;"></div><div class="jslider-label"><span>1,000</span></div><div class="jslider-label jslider-label-to"><span>0</span></div><div class="jslider-value" style="left: 0%; margin-left: 0px; right: auto; visibility: visible;"><span>1,000</span></div><div class="jslider-value jslider-value-to" style="visibility: visible; left: auto; margin-left: 0px; right: 0px;"><span>0</span></div><div class="jslider-scale"></div></td></tr></tbody></table></span>
                            </div>
                            <div class="layout-slider">
                                <span class="series_name">转化率</span>
                                <input id="quick_coverage" type="slider" name="quickcoverage" value="25;0" data-from="25" data-to="0" style="display: none;"><span class="jslider jslider_plastic jslider-limitless"><table><tbody><tr><td><div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i class="v" style="left: 0%; width: 100%;"></i></div><div class="jslider-pointer" style="left: 0%;"></div><div class="jslider-pointer jslider-pointer-to" style="left: 100%;"></div><div class="jslider-label"><span>25</span></div><div class="jslider-label jslider-label-to"><span>0</span></div><div class="jslider-value" style="left: 0%; margin-left: 0px; right: auto; visibility: visible;"><span>25</span></div><div class="jslider-value jslider-value-to" style="visibility: visible; left: auto; margin-left: 0px; right: 0px;"><span>0</span></div><div class="jslider-scale"></div></td></tr></tbody></table></span>
                            </div>
                            <div class="layout-slider">
                                <span class="series_name">竞争度</span>
                                <input id="quick_cat_competition" type="slider" name="quickcat_competition" value="0;7134" data-from="0" data-to="7134" style="display: none;"><span class="jslider jslider_plastic jslider-limitless"><table><tbody><tr><td><div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i class="v" style="left: 0%; width: 100%;"></i></div><div class="jslider-pointer" style="left: 0%;"></div><div class="jslider-pointer jslider-pointer-to" style="left: 100%;"></div><div class="jslider-label"><span>0</span></div><div class="jslider-label jslider-label-to"><span>7,134</span></div><div class="jslider-value" style="left: 0%; margin-left: 0px; right: auto; visibility: visible;"><span>0</span></div><div class="jslider-value jslider-value-to" style="visibility: visible; left: auto; margin-left: 0px; right: 0px;"><span>7,134</span></div><div class="jslider-scale"></div></td></tr></tbody></table></span>
                            </div>
                            <div class="layout-slider">
                                <span class="series_name">点击指数</span>
                                <input id="quick_cat_click" type="slider" name="quickcat_click" value="85272;0" data-from="85272" data-to="0" style="display: none;"><span class="jslider jslider_plastic jslider-limitless"><table><tbody><tr><td><div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i class="v" style="left: 0%; width: 100%;"></i></div><div class="jslider-pointer" style="left: 0%;"></div><div class="jslider-pointer jslider-pointer-to" style="left: 100%;"></div><div class="jslider-label"><span>85,272</span></div><div class="jslider-label jslider-label-to"><span>0</span></div><div class="jslider-value" style="left: 0%; margin-left: 0px; right: auto; visibility: visible;"><span>85,272</span></div><div class="jslider-value jslider-value-to" style="visibility: visible; left: auto; margin-left: 0px; right: 0px;"><span>0</span></div><div class="jslider-scale"></div></td></tr></tbody></table></span>
                            </div>
                            <div class="layout-slider">
                                <span class="series_name">市场均价</span>
                                <input id="quick_cat_cpc" type="slider" name="quickcat_cpc" value="0.08;2.36" data-from="0.08" data-to="2.36" style="display: none;"><span class="jslider jslider_plastic jslider-limitless"><table><tbody><tr><td><div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i class="v" style="left: 0%; width: 100%;"></i></div><div class="jslider-pointer" style="left: 0%;"></div><div class="jslider-pointer jslider-pointer-to" style="left: 100%;"></div><div class="jslider-label"><span>0.08</span></div><div class="jslider-label jslider-label-to"><span>2.36</span></div><div class="jslider-value" style="left: 0%; margin-left: 0px; right: auto; visibility: visible;"><span>0.08</span></div><div class="jslider-value jslider-value-to" style="visibility: visible; left: auto; margin-left: 0px; right: 0px;"><span>2.36</span></div><div class="jslider-scale"></div></td></tr></tbody></table></span>
                            </div>
                        </div>
                    </div>
                </div>
              </span>
                    <div class="btn-group ml10" role="group">
                        <button type="button" class="btn filter btn-default btn-sm" data-type="sys">系统推荐</button>
                        <button type="button" class="btn filter btn-default btn-sm" data-type="roi"> 转化包 </button>
                        <button type="button" class="btn filter btn-default btn-sm" data-type="imp"> 流量包 </button>
                        <button type="button" class="btn filter btn-default btn-sm" data-type="mobile"> 移动包 </button>
                        <button type="button" class="btn filter btn-default btn-sm" data-type="hppr">高性价比包</button>
                        <button type="button" class="btn filter btn-default btn-sm active" data-type="all">全部候选词</button>
                    </div>
                    <div class="r">
                        <div class="input-group w200 l mr10">
                            <input type="text" class="form-control" id="quick_include" placeholder="包含" style="width:81px;">
                            <input type="text" class="form-control" id="quick_uninclude" placeholder="不包含" style="width:81px;border-left: none;border-right: none;">
                  <span class="input-group-btn">
                    <button class="btn btn-default btn-sm btn_search" type="button"><i class="iconfont f16"></i></button>
                  </span>
                        </div>
                        <button class="btn btn-sm btn-default copy_btn" title="复制关键词">
                            <i class="iconfont f16"></i>
                        </button>
                        <a class="btn btn-sm btn-default export_btn" target="_blank" download="宝贝715202952选词列表.csv" title="导出关键词">
                            <i class="iconfont f16"></i>
                        </a>
                    </div>
                </div>
                <div style="position: relative;">
                    <div id="quick_common_table_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table select_keyword dataTable" id="quick_common_table">
                        <thead>
                        <tr role="row"><th class="hide sorting_desc" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="关键词">关键词</th><th class="w70 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="匹配度: activate to sort column ascending"><div>匹配度</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="市场均价: activate to sort column ascending"><div>市场均价</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="展现指数: activate to sort column ascending"><div>展现指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="点击指数: activate to sort column ascending"><div>点击指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="竞争指数: activate to sort column ascending"><div>竞争指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="市场点击率: activate to sort column ascending"><div>市场点击率</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="市场转化率: activate to sort column ascending"><div>市场转化率</div></th></tr></thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女人牛仔裤长裤</div><input type="checkbox" class="mr5" id="quickinput01476280869325"><span data-price="0.83" data-cpc="1.10" data-sys="1" data-roi="159" data-imp="197" data-hppr="92" data-mobile="0">女人牛仔裤长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女人牛仔裤长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.10</td><td class=" ">1162905</td><td class=" ">30738</td><td class=" ">4689</td><td class=" ">2.45%</td><td class=" ">1.37%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">宽松牛仔裤女性</div><input type="checkbox" class="mr5" id="quickinput11476280869325"><span data-price="0.47" data-cpc="0.62" data-sys="1" data-roi="128" data-imp="195" data-hppr="137" data-mobile="0">宽松牛仔裤女性</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=宽松牛仔裤女性" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.62</td><td class=" ">415745</td><td class=" ">16278</td><td class=" ">2475</td><td class=" ">3.66%</td><td class=" ">1.01%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女性高腰牛仔裤子</div><input type="checkbox" class="mr5" id="quickinput21476280869325"><span data-price="0.83" data-cpc="1.10" data-sys="1" data-roi="174" data-imp="194" data-hppr="132" data-mobile="0">女性高腰牛仔裤子</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女性高腰牛仔裤子" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.10</td><td class=" ">374596</td><td class=" ">13917</td><td class=" ">2613</td><td class=" ">3.47%</td><td class=" ">1.64%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士牛仔高腰裤长裤</div><input type="checkbox" class="mr5" id="quickinput31476280869325"><span data-price="0.91" data-cpc="1.21" data-sys="1" data-roi="183" data-imp="189" data-hppr="125" data-mobile="0">女士牛仔高腰裤长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士牛仔高腰裤长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.21</td><td class=" ">246275</td><td class=" ">6115</td><td class=" ">2707</td><td class=" ">2.3%</td><td class=" ">1.79%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">宽松长裤牛仔裤女士</div><input type="checkbox" class="mr5" id="quickinput41476280869325"><span data-price="0.57" data-cpc="0.76" data-sys="1" data-roi="123" data-imp="191" data-hppr="103" data-mobile="0">宽松长裤牛仔裤女士</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=宽松长裤牛仔裤女士" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.76</td><td class=" ">214218</td><td class=" ">6768</td><td class=" ">2066</td><td class=" ">2.94%</td><td class=" ">0.97%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿牛仔裤</div><input type="checkbox" class="mr5" id="quickinput51476280869325"><span data-price="0.41" data-cpc="0.54" data-sys="1" data-roi="83" data-imp="190" data-hppr="141" data-mobile="0">阔腿牛仔裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.54</td><td class=" ">146371</td><td class=" ">6410</td><td class=" ">1185</td><td class=" ">4.11%</td><td class=" ">0.66%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔女人长裤</div><input type="checkbox" class="mr5" id="quickinput61476280869325"><span data-price="0.51" data-cpc="0.68" data-sys="1" data-roi="121" data-imp="172" data-hppr="91" data-mobile="0">牛仔女人长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔女人长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.68</td><td class=" ">110701</td><td class=" ">1712</td><td class=" ">1833</td><td class=" ">1.42%</td><td class=" ">0.92%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤子长裤</div><input type="checkbox" class="mr5" id="quickinput71476280869325"><span data-price="0.78" data-cpc="1.04" data-sys="1" data-roi="176" data-imp="163" data-hppr="102" data-mobile="0">牛仔裤子长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤子长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.04</td><td class=" ">107557</td><td class=" ">1126</td><td class=" ">1667</td><td class=" ">0.95%</td><td class=" ">1.68%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女裤长裤</div><input type="checkbox" class="mr5" id="quickinput81476280869325"><span data-price="0.67" data-cpc="0.89" data-sys="1" data-roi="179" data-imp="179" data-hppr="146" data-mobile="0">女裤长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女裤长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.89</td><td class=" ">107256</td><td class=" ">2188</td><td class=" ">1501</td><td class=" ">1.88%</td><td class=" ">1.69%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">秋冬阔腿裤</div><input type="checkbox" class="mr5" id="quickinput91476280869325"><span data-price="0.70" data-cpc="0.93" data-sys="1" data-roi="131" data-imp="188" data-hppr="95" data-mobile="0">秋冬阔腿裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=秋冬阔腿裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.93</td><td class=" ">98836</td><td class=" ">5354</td><td class=" ">803</td><td class=" ">5.1%</td><td class=" ">1.02%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女子长裤裤</div><input type="checkbox" class="mr5" id="quickinput101476280869325"><span data-price="0.62" data-cpc="0.83" data-sys="1" data-roi="177" data-imp="182" data-hppr="143" data-mobile="0">女子长裤裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女子长裤裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.83</td><td class=" ">85779</td><td class=" ">2333</td><td class=" ">1678</td><td class=" ">2.53%</td><td class=" ">1.68%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿裤女子长裤</div><input type="checkbox" class="mr5" id="quickinput111476280869325"><span data-price="0.65" data-cpc="0.86" data-sys="1" data-roi="122" data-imp="183" data-hppr="169" data-mobile="0">阔腿裤女子长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤女子长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.86</td><td class=" ">73737</td><td class=" ">2340</td><td class=" ">941</td><td class=" ">2.96%</td><td class=" ">0.92%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤裤女性</div><input type="checkbox" class="mr5" id="quickinput121476280869325"><span data-price="0.47" data-cpc="0.62" data-sys="1" data-roi="156" data-imp="176" data-hppr="145" data-mobile="0">牛仔裤裤女性</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤裤女性" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.62</td><td class=" ">72462</td><td class=" ">1836</td><td class=" ">1438</td><td class=" ">2.35%</td><td class=" ">1.32%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿裤子冬</div><input type="checkbox" class="mr5" id="quickinput131476280869325"><span data-price="0.56" data-cpc="0.75" data-sys="1" data-roi="91" data-imp="184" data-hppr="86" data-mobile="0">阔腿裤子冬</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤子冬" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.75</td><td class=" ">72019</td><td class=" ">2759</td><td class=" ">515</td><td class=" ">3.59%</td><td class=" ">0.69%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">长裤女性秋</div><input type="checkbox" class="mr5" id="quickinput141476280869325"><span data-price="0.57" data-cpc="0.76" data-sys="1" data-roi="137" data-imp="180" data-hppr="96" data-mobile="0">长裤女性秋</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤女性秋" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.76</td><td class=" ">66879</td><td class=" ">2286</td><td class=" ">1058</td><td class=" ">3.19%</td><td class=" ">1.09%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿裤子秋</div><input type="checkbox" class="mr5" id="quickinput151476280869325"><span data-price="0.60" data-cpc="0.80" data-sys="1" data-roi="115" data-imp="186" data-hppr="108" data-mobile="0">阔腿裤子秋</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤子秋" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.80</td><td class=" ">64161</td><td class=" ">3280</td><td class=" ">721</td><td class=" ">4.81%</td><td class=" ">0.89%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤秋女性</div><input type="checkbox" class="mr5" id="quickinput161476280869325"><span data-price="0.58" data-cpc="0.77" data-sys="1" data-roi="151" data-imp="174" data-hppr="123" data-mobile="0">牛仔裤秋女性</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤秋女性" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.77</td><td class=" ">50193</td><td class=" ">1799</td><td class=" ">921</td><td class=" ">3.35%</td><td class=" ">1.24%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">高腰裤长裤女性</div><input type="checkbox" class="mr5" id="quickinput171476280869325"><span data-price="0.59" data-cpc="0.78" data-sys="1" data-roi="162" data-imp="170" data-hppr="149" data-mobile="0">高腰裤长裤女性</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰裤长裤女性" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.78</td><td class=" ">47532</td><td class=" ">1559</td><td class=" ">1038</td><td class=" ">3.06%</td><td class=" ">1.41%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤女秋季长裤</div><input type="checkbox" class="mr5" id="quickinput181476280869325"><span data-price="0.73" data-cpc="0.97" data-sys="1" data-roi="157" data-imp="177" data-hppr="88" data-mobile="0">牛仔裤女秋季长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤女秋季长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.97</td><td class=" ">46269</td><td class=" ">1968</td><td class=" ">888</td><td class=" ">3.99%</td><td class=" ">1.34%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">秋天女子牛仔裤</div><input type="checkbox" class="mr5" id="quickinput191476280869325"><span data-price="0.66" data-cpc="0.88" data-sys="1" data-roi="148" data-imp="166" data-hppr="119" data-mobile="0">秋天女子牛仔裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=秋天女子牛仔裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.88</td><td class=" ">45582</td><td class=" ">1351</td><td class=" ">1129</td><td class=" ">2.76%</td><td class=" ">1.21%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿裤秋女人</div><input type="checkbox" class="mr5" id="quickinput201476280869325"><span data-price="0.63" data-cpc="0.84" data-sys="1" data-roi="82" data-imp="178" data-hppr="64" data-mobile="0">阔腿裤秋女人</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤秋女人" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.84</td><td class=" ">45107</td><td class=" ">2178</td><td class=" ">705</td><td class=" ">4.54%</td><td class=" ">0.66%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿牛仔裤女性</div><input type="checkbox" class="mr5" id="quickinput211476280869325"><span data-price="0.38" data-cpc="0.51" data-sys="1" data-roi="79" data-imp="173" data-hppr="112" data-mobile="0">阔腿牛仔裤女性</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔裤女性" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.51</td><td class=" ">41888</td><td class=" ">1786</td><td class=" ">768</td><td class=" ">4%</td><td class=" ">0.63%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士复古宽松牛仔裤</div><input type="checkbox" class="mr5" id="quickinput221476280869325"><span data-price="0.23" data-cpc="0.31" data-sys="1" data-roi="72" data-imp="168" data-hppr="76" data-mobile="0">女士复古宽松牛仔裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士复古宽松牛仔裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.31</td><td class=" ">39455</td><td class=" ">1449</td><td class=" ">245</td><td class=" ">3.44%</td><td class=" ">0.51%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女裤牛仔裤子</div><input type="checkbox" class="mr5" id="quickinput231476280869325"><span data-price="0.51" data-cpc="0.68" data-sys="1" data-roi="141" data-imp="160" data-hppr="130" data-mobile="0">女裤牛仔裤子</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女裤牛仔裤子" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.68</td><td class=" ">39235</td><td class=" ">848</td><td class=" ">793</td><td class=" ">2%</td><td class=" ">1.14%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤子秋</div><input type="checkbox" class="mr5" id="quickinput241476280869325"><span data-price="1.28" data-cpc="1.60" data-sys="1" data-roi="194" data-imp="95" data-hppr="182" data-mobile="0">牛仔裤子秋</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤子秋" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.60</td><td class=" ">37506</td><td class=" ">150</td><td class=" ">751</td><td class=" ">0.36%</td><td class=" ">3.37%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女子宽松长裤</div><input type="checkbox" class="mr5" id="quickinput251476280869325"><span data-price="0.41" data-cpc="0.55" data-sys="1" data-roi="110" data-imp="167" data-hppr="120" data-mobile="0">女子宽松长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女子宽松长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.55</td><td class=" ">35008</td><td class=" ">1416</td><td class=" ">696</td><td class=" ">3.79%</td><td class=" ">0.86%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">长裤秋天女子</div><input type="checkbox" class="mr5" id="quickinput261476280869325"><span data-price="0.71" data-cpc="0.94" data-sys="1" data-roi="166" data-imp="158" data-hppr="117" data-mobile="0">长裤秋天女子</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤秋天女子" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.94</td><td class=" ">34462</td><td class=" ">746</td><td class=" ">953</td><td class=" ">2%</td><td class=" ">1.48%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女子阔腿长裤子</div><input type="checkbox" class="mr5" id="quickinput271476280869325"><span data-price="0.50" data-cpc="0.66" data-sys="1" data-roi="75" data-imp="171" data-hppr="127" data-mobile="0">女子阔腿长裤子</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女子阔腿长裤子" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.66</td><td class=" ">32288</td><td class=" ">1600</td><td class=" ">268</td><td class=" ">4.66%</td><td class=" ">0.54%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">秋冬女人阔腿裤</div><input type="checkbox" class="mr5" id="quickinput281476280869325"><span data-price="0.77" data-cpc="1.03" data-sys="1" data-roi="108" data-imp="169" data-hppr="71" data-mobile="0">秋冬女人阔腿裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=秋冬女人阔腿裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.03</td><td class=" ">31307</td><td class=" ">1480</td><td class=" ">571</td><td class=" ">4.44%</td><td class=" ">0.82%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士阔腿牛仔裤长裤</div><input type="checkbox" class="mr5" id="quickinput291476280869325"><span data-price="0.54" data-cpc="0.72" data-sys="1" data-roi="74" data-imp="162" data-hppr="74" data-mobile="0">女士阔腿牛仔裤长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士阔腿牛仔裤长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.72</td><td class=" ">30710</td><td class=" ">947</td><td class=" ">533</td><td class=" ">2.88%</td><td class=" ">0.53%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">裤子长裤阔腿</div><input type="checkbox" class="mr5" id="quickinput301476280869325"><span data-price="0.65" data-cpc="0.86" data-sys="1" data-roi="85" data-imp="161" data-hppr="87" data-mobile="0">裤子长裤阔腿</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤子长裤阔腿" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.86</td><td class=" ">29233</td><td class=" ">931</td><td class=" ">612</td><td class=" ">2.97%</td><td class=" ">0.67%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">深色女牛仔裤</div><input type="checkbox" class="mr5" id="quickinput311476280869325"><span data-price="0.59" data-cpc="0.78" data-sys="1" data-roi="95" data-imp="175" data-hppr="98" data-mobile="0">深色女牛仔裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=深色女牛仔裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.78</td><td class=" ">28438</td><td class=" ">1800</td><td class=" ">554</td><td class=" ">5.99%</td><td class=" ">0.71%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">阔腿牛仔裤宽松</div><input type="checkbox" class="mr5" id="quickinput321476280869325"><span data-price="0.26" data-cpc="0.35" data-sys="1" data-roi="101" data-imp="165" data-hppr="151" data-mobile="0">阔腿牛仔裤宽松</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔裤宽松" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.35</td><td class=" ">28281</td><td class=" ">1191</td><td class=" ">352</td><td class=" ">3.95%</td><td class=" ">0.77%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士肥大牛仔裤</div><input type="checkbox" class="mr5" id="quickinput331476280869325"><span data-price="0.56" data-cpc="0.75" data-sys="1" data-roi="145" data-imp="150" data-hppr="165" data-mobile="0">女士肥大牛仔裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士肥大牛仔裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.75</td><td class=" ">24475</td><td class=" ">586</td><td class=" ">259</td><td class=" ">2.22%</td><td class=" ">1.19%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">长裤女裤秋季</div><input type="checkbox" class="mr5" id="quickinput341476280869325"><span data-price="0.65" data-cpc="0.87" data-sys="1" data-roi="165" data-imp="148" data-hppr="136" data-mobile="0">长裤女裤秋季</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤女裤秋季" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.87</td><td class=" ">24014</td><td class=" ">576</td><td class=" ">618</td><td class=" ">2.23%</td><td class=" ">1.48%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女子高腰阔腿裤</div><input type="checkbox" class="mr5" id="quickinput351476280869325"><span data-price="0.68" data-cpc="0.91" data-sys="1" data-roi="94" data-imp="164" data-hppr="80" data-mobile="0">女子高腰阔腿裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女子高腰阔腿裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.91</td><td class=" ">22494</td><td class=" ">1127</td><td class=" ">616</td><td class=" ">4.72%</td><td class=" ">0.71%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">长裤裤子女秋</div><input type="checkbox" class="mr5" id="quickinput361476280869325"><span data-price="0.62" data-cpc="0.82" data-sys="1" data-roi="134" data-imp="157" data-hppr="83" data-mobile="0">长裤裤子女秋</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤裤子女秋" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.82</td><td class=" ">22491</td><td class=" ">726</td><td class=" ">665</td><td class=" ">3.01%</td><td class=" ">1.07%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士阔腿裤秋季高腰</div><input type="checkbox" class="mr5" id="quickinput371476280869325"><span data-price="0.71" data-cpc="0.89" data-sys="1" data-roi="63" data-imp="141" data-hppr="59" data-mobile="0">女士阔腿裤秋季高腰</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士阔腿裤秋季高腰" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.89</td><td class=" ">22440</td><td class=" ">432</td><td class=" ">270</td><td class=" ">1.78%</td><td class=" ">0.45%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">裤裤长裤牛仔女腿阔</div><input type="checkbox" class="mr5" id="quickinput381476280869325"><span data-price="0.75" data-cpc="1.00" data-sys="1" data-roi="125" data-imp="151" data-hppr="107" data-mobile="0">裤裤长裤牛仔女腿阔</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤裤长裤牛仔女腿阔" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.00</td><td class=" ">20751</td><td class=" ">593</td><td class=" ">340</td><td class=" ">2.66%</td><td class=" ">0.98%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">高腰牛仔裤秋</div><input type="checkbox" class="mr5" id="quickinput391476280869325"><span data-price="0.72" data-cpc="0.96" data-sys="1" data-roi="140" data-imp="156" data-hppr="177" data-mobile="0">高腰牛仔裤秋</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰牛仔裤秋" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.96</td><td class=" ">19936</td><td class=" ">720</td><td class=" ">232</td><td class=" ">3.38%</td><td class=" ">1.13%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女人高腰长裤</div><input type="checkbox" class="mr5" id="quickinput401476280869325"><span data-price="0.70" data-cpc="0.93" data-sys="1" data-roi="192" data-imp="146" data-hppr="167" data-mobile="0">女人高腰长裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女人高腰长裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.93</td><td class=" ">17535</td><td class=" ">548</td><td class=" ">587</td><td class=" ">2.92%</td><td class=" ">2.24%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女裤牛仔长裤裤</div><input type="checkbox" class="mr5" id="quickinput411476280869325"><span data-price="0.56" data-cpc="0.75" data-sys="1" data-roi="161" data-imp="152" data-hppr="129" data-mobile="0">女裤牛仔长裤裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女裤牛仔长裤裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.75</td><td class=" ">17085</td><td class=" ">612</td><td class=" ">597</td><td class=" ">3.35%</td><td class=" ">1.41%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">高腰牛仔裤女宽松</div><input type="checkbox" class="mr5" id="quickinput421476280869325"><span data-price="0.38" data-cpc="0.51" data-sys="1" data-roi="126" data-imp="159" data-hppr="153" data-mobile="0">高腰牛仔裤女宽松</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰牛仔裤女宽松" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.51</td><td class=" ">16860</td><td class=" ">800</td><td class=" ">538</td><td class=" ">4.46%</td><td class=" ">0.99%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">裤子阔腿裤女韩国牛仔</div><input type="checkbox" class="mr5" id="quickinput431476280869325"><span data-price="0.26" data-cpc="0.35" data-sys="1" data-roi="93" data-imp="149" data-hppr="133" data-mobile="0">裤子阔腿裤女韩国牛仔</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤子阔腿裤女韩国牛仔" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.35</td><td class=" ">15088</td><td class=" ">582</td><td class=" ">203</td><td class=" ">3.61%</td><td class=" ">0.70%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤子裤子</div><input type="checkbox" class="mr5" id="quickinput441476280869325"><span data-price="0.94" data-cpc="1.17" data-sys="1" data-roi="149" data-imp="130" data-hppr="72" data-mobile="0">牛仔裤子裤子</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤子裤子" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">1.17</td><td class=" ">14660</td><td class=" ">330</td><td class=" ">676</td><td class=" ">2.09%</td><td class=" ">1.22%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">牛仔裤女人裤子宽松</div><input type="checkbox" class="mr5" id="quickinput451476280869325"><span data-price="0.37" data-cpc="0.49" data-sys="1" data-roi="65" data-imp="147" data-hppr="57" data-mobile="0">牛仔裤女人裤子宽松</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=牛仔裤女人裤子宽松" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.49</td><td class=" ">13963</td><td class=" ">553</td><td class=" ">503</td><td class=" ">3.71%</td><td class=" ">0.46%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士牛仔裤冬</div><input type="checkbox" class="mr5" id="quickinput461476280869325"><span data-price="0.74" data-cpc="0.92" data-sys="1" data-roi="186" data-imp="132" data-hppr="135" data-mobile="0">女士牛仔裤冬</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士牛仔裤冬" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.92</td><td class=" ">13104</td><td class=" ">333</td><td class=" ">313</td><td class=" ">2.36%</td><td class=" ">1.94%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">裤阔腿裤女性</div><input type="checkbox" class="mr5" id="quickinput471476280869325"><span data-price="0.70" data-cpc="0.88" data-sys="1" data-roi="147" data-imp="139" data-hppr="142" data-mobile="0">裤阔腿裤女性</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤阔腿裤女性" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.88</td><td class=" ">12373</td><td class=" ">402</td><td class=" ">494</td><td class=" ">3.04%</td><td class=" ">1.21%
                            </td></tr><tr class="odd check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士牛仔裤长裤秋</div><input type="checkbox" class="mr5" id="quickinput481476280869325"><span data-price="0.66" data-cpc="0.83" data-sys="1" data-roi="155" data-imp="112" data-hppr="114" data-mobile="0">女士牛仔裤长裤秋</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士牛仔裤长裤秋" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.83</td><td class=" ">11749</td><td class=" ">224</td><td class=" ">381</td><td class=" ">1.76%</td><td class=" ">1.31%
                            </td></tr><tr class="even check_column"><td class=" hide sorting_1"><span class="hide custom">1000</span></td><td class=" "><div class="hide">女士秋裤牛仔裤</div><input type="checkbox" class="mr5" id="quickinput491476280869325"><span data-price="0.54" data-cpc="0.68" data-sys="1" data-roi="57" data-imp="115" data-hppr="50" data-mobile="0">女士秋裤牛仔裤</span><a href="http://new.subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士秋裤牛仔裤" target="_blank"><i class="iconfont link"></i></a></td><td class=" ">1000</td><td class=" ">0.68</td><td class=" ">10792</td><td class=" ">230</td><td class=" ">271</td><td class=" ">1.97%</td><td class=" ">0.32%
                            </td></tr></tbody></table>
                </div>
                <div class="bottom_operation" style="visibility: visible; position: fixed;">
                    <a href="javascript:;" class="add_page">&lt;&lt;添加到当前页</a>
                    <div class="r">
                        <div id="quick_pagination" class="pagination_bar"><span class="page">1</span>/12页

                            <ul class="pagination m0 vm">
                                <li>
                                    <a href="javascript:;" data-page="1" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="javascript:;" data-page="1">1</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="2">2</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="3">3</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="4">4</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="5">5</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="6">6</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="7">7</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="8">8</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="9">9</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="10">10</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="11">11</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="12">12</a>
                                </li>

                                <li>
                                    <a href="javascript:;" data-page="12" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>
                            </ul></div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="precise">
                <div class="tag_editor">
                    <textarea id="word_filter" class="hide tag-editor-hidden-src"></textarea><ul class="tag-editor ui-sortable"><li style="width:1px" class="ui-sortable-handle">&nbsp;</li><li class="placeholder ui-sortable-handle"><div>点击输入框选择或输入核心词</div></li></ul>
                    <button class="btn btn-primary" id="btn_tao_keyword">开始淘词</button>

                    <div class="select_box hide hold-on-click" id="select_box">
                        <div class="p10">
                            <span class="b w60 l mt2">产品词：</span>
                            <ul class="pt-tag with-x pl60 guess_elemword">

                                <li><a href="javascript:;">牛仔裤</a></li>

                                <li><a href="javascript:;">阔腿裤</a></li>

                                <li><a href="javascript:;">长裤子</a></li>

                                <li><a href="javascript:;">长裤</a></li>

                            </ul>
                        </div>
                        <div class="pl10 pr10 pb10">
                            <span class="b w60 l mt2">品牌词：</span>
                            <ul class="pt-tag with-x pl60 guess_elemword">

                                <span class="gray f12 dib" style="margin: 4px 8px;">暂无</span>

                            </ul>
                        </div>
                        <div class="pl10 pr10 pb10">
                            <span class="b w60 l mt2">卖点词：</span>
                            <ul class="pt-tag with-x pl60 guess_elemword">

                                <li><a href="javascript:;">女人</a></li>

                                <li><a href="javascript:;">牛仔</a></li>

                                <li><a href="javascript:;">牛仔裤</a></li>

                                <li><a href="javascript:;">水洗</a></li>

                                <li><a href="javascript:;">女子</a></li>

                                <li><a href="javascript:;">阔腿裤</a></li>

                                <li><a href="javascript:;">女士</a></li>

                                <li><a href="javascript:;">女</a></li>

                                <li><a href="javascript:;">长裤子</a></li>

                                <li><a href="javascript:;">长裤</a></li>

                                <li><a href="javascript:;">女性</a></li>

                            </ul>
                        </div>
                        <div class="pl10 pr10 pb10">
                            <span class="b w60 l mt2">属性词：</span>
                            <ul class="pt-tag with-x pl60 guess_elemword">

                                <li><a href="javascript:;">2016</a></li>

                                <li><a href="javascript:;">阔脚裤</a></li>

                                <li><a href="javascript:;">长裤子</a></li>

                                <li><a href="javascript:;">牛仔裤</a></li>

                                <li><a href="javascript:;">洁儿林</a></li>

                                <li><a href="javascript:;">阔腿裤</a></li>

                                <li><a href="javascript:;">复古</a></li>

                                <li><a href="javascript:;">钮扣</a></li>

                                <li><a href="javascript:;">韩国</a></li>

                                <li><a href="javascript:;">xl</a></li>

                                <li><a href="javascript:;">牛仔</a></li>

                                <li><a href="javascript:;">衣扣</a></li>

                                <li><a href="javascript:;">水洗</a></li>

                                <li><a href="javascript:;">街拍</a></li>

                                <li><a href="javascript:;">免邮</a></li>

                                <li><a href="javascript:;">秋冬</a></li>

                                <li><a href="javascript:;">拉锁</a></li>

                                <li><a href="javascript:;">纽扣</a></li>

                                <li><a href="javascript:;">卷边</a></li>

                                <li><a href="javascript:;">24</a></li>

                                <li><a href="javascript:;">女人</a></li>

                                <li><a href="javascript:;">阔脚</a></li>

                                <li><a href="javascript:;">其他</a></li>

                                <li><a href="javascript:;">女性</a></li>

                                <li><a href="javascript:;">肥大</a></li>

                                <li><a href="javascript:;">秋季</a></li>

                                <li><a href="javascript:;">阔腿</a></li>

                                <li><a href="javascript:;">宽松</a></li>

                                <li><a href="javascript:;">撕边</a></li>

                                <li><a href="javascript:;">秋天</a></li>

                                <li><a href="javascript:;">磨白</a></li>

                                <li><a href="javascript:;">女子</a></li>

                                <li><a href="javascript:;">宽大</a></li>

                                <li><a href="javascript:;">包邮</a></li>

                                <li><a href="javascript:;">百搭</a></li>

                                <li><a href="javascript:;">长裤</a></li>

                                <li><a href="javascript:;">扣子</a></li>

                                <li><a href="javascript:;">拉链</a></li>

                                <li><a href="javascript:;">18</a></li>

                                <li><a href="javascript:;">做旧</a></li>

                                <li><a href="javascript:;">周岁</a></li>

                                <li><a href="javascript:;">深色</a></li>

                                <li><a href="javascript:;">女士</a></li>

                                <li><a href="javascript:;">高腰</a></li>

                                <li><a href="javascript:;">裤子</a></li>

                                <li><a href="javascript:;">浅色</a></li>

                                <li><a href="javascript:;">牛仔裤</a></li>

                                <li><a href="javascript:;">阔腿裤</a></li>

                                <li><a href="javascript:;">阔脚裤</a></li>

                                <li><a href="javascript:;">阔腿</a></li>

                                <li><a href="javascript:;">深色</a></li>

                                <li><a href="javascript:;">磨白</a></li>

                                <li><a href="javascript:;">水洗</a></li>

                                <li><a href="javascript:;">做旧</a></li>

                                <li><a href="javascript:;">拉链</a></li>

                                <li><a href="javascript:;">牛仔</a></li>

                                <li><a href="javascript:;">高腰</a></li>

                                <li><a href="javascript:;">长裤</a></li>

                                <li><a href="javascript:;">浅色</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div id="precise_box" class="hidden">
                    <div class="top_operation">
                <span class="dropdown">
                  <button class="btn btn-default btn-sm" data-toggle="dropdown"><i class="iconfont mr5"></i>批量筛选</button>
                  <div class="dropdown-menu db vh hold-on-click mt5 w500">
                      <div class="modal-header p10">
                          <h4>拉动滑竿过滤关键词</h4>
                      </div>
                      <div class="modal-body">
                          <div class="f12 text-info">滑竿越往右，符合条件的关键词越多，但是词的质量会越差</div>
                          <div class="mt20" id="precise_div_sliders"></div>
                      </div>
                  </div>
                </span>
                        <div class="btn-group ml10" role="group">
                            <button type="button" class="btn filter btn-default btn-sm" data-type="sys">系统推荐</button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="roi"> 转化包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="imp"> 流量包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="mobile"> 移动包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="hppr">高性价比包</button>
                            <button type="button" class="btn filter btn-default btn-sm active" data-type="all">全部候选词</button>
                        </div>
                        <div class="r">
                            <div class="input-group w200 l mr10">
                                <input type="text" class="form-control" id="precise_include" placeholder="包含" style="width:81px;">
                                <input type="text" class="form-control" id="precise_uninclude" placeholder="不包含" style="width:81px;border-left: none;border-right: none;">
                    <span class="input-group-btn">
                      <button class="btn btn-default btn-sm btn_search" type="button"><i class="iconfont f16"></i></button>
                    </span>
                            </div>
                            <button class="btn btn-sm btn-default copy_btn" title="复制关键词">
                                <i class="iconfont f16"></i>
                            </button>
                            <a class="btn btn-sm btn-default export_btn" target="_blank" download="宝贝715202952选词列表.csv" title="导出关键词">
                                <i class="iconfont f16"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div id="precise_common_table_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table select_keyword dataTable" id="precise_common_table">
                            <thead>
                            <tr role="row"><th class="hide sorting_desc" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="关键词">关键词</th><th class="w70 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="匹配度: activate to sort column ascending"><div>匹配度</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="市场均价: activate to sort column ascending"><div>市场均价</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="展现指数: activate to sort column ascending"><div>展现指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="点击指数: activate to sort column ascending"><div>点击指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="竞争指数: activate to sort column ascending"><div>竞争指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="市场点击率: activate to sort column ascending"><div>市场点击率</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="precise_common_table" rowspan="1" colspan="1" aria-label="市场转化率: activate to sort column ascending"><div>市场转化率</div></th></tr></thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">没有关键词记录</td></tr></tbody></table>
                    </div>
                    <div class="bottom_operation">
                        <a href="javascript:;" class="add_page">&lt;&lt;添加到当前页</a>
                        <div class="r">
                            <div id="precise_pagination" class="pagination_bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="combine">
                <div class="pt10 pl10 mb30">
                    <table class="pct100">
                        <tbody><tr>
                            <td>
                                <div class="tc mb5 f14">产品词</div>
                  <textarea class="form-control" rows="5" id="textarea_prdtword">牛仔裤
阔腿裤
长裤子
长裤</textarea>
                                <div class="text-muted">1行1个,已输入<span id="prdtword_count">4</span>个，最多5个</div>
                            </td>
                            <td class="w20 tc">+</td>
                            <td>
                                <div class="tc mb5 f14">修饰词</div>
                  <textarea class="form-control" rows="5" id="textarea_dcrtword">复古
钮扣
韩国
xl
牛仔
衣扣
水洗
街拍
免邮
秋冬</textarea>
                                <div class="text-muted">1行1个,已输入<span id="dcrtword_count">10</span>个，最多15个</div>
                            </td>
                            <td class="w20 tc">+</td>
                            <td>
                                <div class="tc mb5 f14">促销词</div>
                                <textarea class="form-control" rows="5" id="textarea_prmtword" placeholder="请谨慎输入，以免违规被罚，勿随意添加专柜、正品、原单、日单等可能违规的词"></textarea>
                                <div class="text-muted">1行1个,已输入<span id="prmtword_count">0</span>个，最多5个</div>
                            </td>
                            <td class="pl10">
                                <button class="btn btn-primary" id="btn_auto_combine_words">开始组词</button>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div id="combine_box" class="hidden">
                    <div class="top_operation">
                <span class="dropdown">
                  <button class="btn btn-default btn-sm" data-toggle="dropdown"><i class="iconfont mr5"></i>批量筛选</button>
                  <div class="dropdown-menu db vh hold-on-click mt5 w500">
                      <div class="modal-header p10">
                          <h4>拉动滑竿过滤关键词</h4>
                      </div>
                      <div class="modal-body">
                          <div class="f12 text-info">滑竿越往右，符合条件的关键词越多，但是词的质量会越差</div>
                          <div class="mt20" id="combine_div_sliders"></div>
                      </div>
                  </div>
                </span>
                        <div class="btn-group ml10" role="group">
                            <button type="button" class="btn filter btn-default btn-sm" data-type="sys">系统推荐</button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="roi"> 转化包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="imp"> 流量包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="mobile"> 移动包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="hppr">高性价比包</button>
                            <button type="button" class="btn filter btn-default btn-sm active" data-type="all">全部候选词</button>
                        </div>
                        <div class="r">
                            <div class="input-group w200 l mr10">
                                <input type="text" class="form-control" id="combine_include" placeholder="包含" style="width:81px;">
                                <input type="text" class="form-control" id="combine_uninclude" placeholder="不包含" style="width:81px;border-left: none;border-right: none;">
                      <span class="input-group-btn">
                        <button class="btn btn-default btn-sm btn_search" type="button"><i class="iconfont f16"></i></button>
                      </span>
                            </div>
                            <button class="btn btn-sm btn-default copy_btn" title="复制关键词">
                                <i class="iconfont f16"></i>
                            </button>
                            <a class="btn btn-sm btn-default export_btn" target="_blank" download="宝贝715202952选词列表.csv" title="导出关键词">
                                <i class="iconfont f16"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div id="combine_common_table_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table select_keyword dataTable" id="combine_common_table">
                            <thead>
                            <tr role="row"><th class="hide sorting_desc" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="关键词">关键词</th><th class="w70 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="匹配度: activate to sort column ascending"><div>匹配度</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="市场均价: activate to sort column ascending"><div>市场均价</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="展现指数: activate to sort column ascending"><div>展现指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="点击指数: activate to sort column ascending"><div>点击指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="竞争指数: activate to sort column ascending"><div>竞争指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="市场点击率: activate to sort column ascending"><div>市场点击率</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="combine_common_table" rowspan="1" colspan="1" aria-label="市场转化率: activate to sort column ascending"><div>市场转化率</div></th></tr></thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">没有关键词记录</td></tr></tbody></table>
                    </div>
                    <div class="bottom_operation" style="visibility: hidden;">
                        <a href="javascript:;" class="add_page">&lt;&lt;添加到当前页</a>
                        <div class="r">
                            <div id="combine_pagination" class="pagination_bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane " id="manual">
                <div class="pt10 pl10 mb30">
                    <table class="pct100">
                        <tbody><tr>
                            <td>
                                <textarea class="form-control" rows="5" placeholder="请在此输入关键词" id="textarea_manual"></textarea>
                                <div class="text-muted">1行1个,已输入<span id="manual_count">0</span>个</div>
                            </td>
                            <td class="w100">
                                <button class="btn ml10 btn-primary" id="btn_manual_add_words">查询数据</button>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
                <div id="manual_box" class="hidden">
                    <div class="top_operation">
                <span class="dropdown">
                  <button class="btn btn-default btn-sm" data-toggle="dropdown"><i class="iconfont mr5"></i>批量筛选</button>
                  <div class="dropdown-menu db vh hold-on-click mt5 w500">
                      <div class="modal-header p10">
                          <h4>拉动滑竿过滤关键词</h4>
                      </div>
                      <div class="modal-body">
                          <div class="f12 text-info">滑竿越往右，符合条件的关键词越多，但是词的质量会越差</div>
                          <div class="mt20" id="manual_div_sliders"></div>
                      </div>
                  </div>
                </span>
                        <div class="btn-group ml10" role="group">
                            <button type="button" class="btn filter btn-default btn-sm" data-type="sys">系统推荐</button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="roi"> 转化包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="imp"> 流量包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="mobile"> 移动包 </button>
                            <button type="button" class="btn filter btn-default btn-sm" data-type="hppr">高性价比包</button>
                            <button type="button" class="btn filter btn-default btn-sm active" data-type="all">全部候选词</button>
                        </div>
                        <div class="r">
                            <div class="input-group w200 l mr10">
                                <input type="text" class="form-control" id="manual_include" placeholder="包含" style="width:81px;">
                                <input type="text" class="form-control" id="manual_uninclude" placeholder="不包含" style="width:81px;border-left: none;border-right: none;">
                      <span class="input-group-btn">
                        <button class="btn btn-default btn-sm btn_search" type="button"><i class="iconfont f16"></i></button>
                      </span>
                            </div>
                            <button class="btn btn-sm btn-default copy_btn" title="复制关键词">
                                <i class="iconfont f16"></i>
                            </button>
                            <a class="btn btn-sm btn-default export_btn" target="_blank" download="宝贝715202952选词列表.csv" title="导出关键词">
                                <i class="iconfont f16"></i>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div id="manual_common_table_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table select_keyword dataTable" id="manual_common_table">
                            <thead>
                            <tr role="row"><th class="hide sorting_desc" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="关键词">关键词</th><th class="w70 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="匹配度: activate to sort column ascending"><div>匹配度</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="市场均价: activate to sort column ascending"><div>市场均价</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="展现指数: activate to sort column ascending"><div>展现指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="点击指数: activate to sort column ascending"><div>点击指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="竞争指数: activate to sort column ascending"><div>竞争指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="市场点击率: activate to sort column ascending"><div>市场点击率</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="manual_common_table" rowspan="1" colspan="1" aria-label="市场转化率: activate to sort column ascending"><div>市场转化率</div></th></tr></thead>

                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">没有关键词记录</td></tr></tbody></table>
                    </div>
                    <div class="bottom_operation">
                        <a href="javascript:;" class="add_page">&lt;&lt;添加到当前页</a>
                        <div class="r">
                            <div id="manual_pagination" class="pagination_bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="auto bg_white tc mt20" id="show_bottom_banner" ad_id="27">
    <div id="bottom_banner_content" class="pct100">

        <a href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89"><img id="test_img" class="pct100 pl30 pr30" src="./keyword_select_combine_files/TB2ib2hnXXXXXblXpXXXXXXXXXX-836440495.jpg"></a>

    </div>
</div>
