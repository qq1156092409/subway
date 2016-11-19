<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/11/19
 * Time: 18:58
 */
?>
<div class="w1280 auto">

    <ol class="breadcrumb">
        <li><a href="http://w01.ztcjl.com/web/web_home">首页</a></li>
        <li><a href="http://w01.ztcjl.com/mnt/mnt_campaign/35560990" id="campaign_title">

                手动：
                侧款-大麦</a>
        </li>
        <li class="active">

            洁儿林韩国百搭秋冬街拍水洗复古宽松阔腿裤撕边牛仔裤卷边长裤女
        </li>
    </ol>


    <div class="alert alert-warning">
        <a href="http://w01.ztcjl.com/web/select_keyword/combine?adgroup_id=715202952#" class="close" data-dismiss="alert">×</a>
        精灵词库已经将淘宝关键词一网打尽，收集了淘宝下拉框，淘宝推荐词、淘宝热搜、TOP20万...所有你能想到的来源，请亲尽情选用。如果选词不准，请点击<a href="javascript:;" class="b" id="select_feedback">[ 这里 ]</a>反馈意见！
    </div>

    <div id="keyword_cart_box" style="height: 888px;">
        <div id="keyword_cart" style="margin-top: 0px;">
            <header class="b">关键词（已有<span id="count_keyword_count">54</span>个）</header>
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
                    <!-- <input id="change_price_slider" type="text" class="slider_input" name="change_price_slider" value="100"/> -->
                    <!-- <input id="change_price_slider" type="text" value="100" class="slider_input" name="outside_discount"> -->
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
              <!--             <div class="radio">
                            <label>
                              <input type="radio" name="price" value="0.6">
                              0.6倍市场价格出价
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="price" value="0.7">
                              0.7倍市场价格出价
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="price" value="0.8">
                              0.8倍市场价格出价
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="price" value="0.9">
                              0.9倍市场价格出价
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="price" value="1.0">
                              1.0倍市场价格出价
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="price" value="1.2">
                              1.2倍市场价格出价
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="price" value="1.3">
                              1.3倍市场价格出价
                            </label>
                          </div> -->
              <header>匹配方式</header>
              <div class="radio">
                  <label>
                      <input type="radio" name="match" value="4" checked="">
                      广泛匹配
                  </label>
              </div>
              <!--<div class="radio">-->
              <!--<label>-->
              <!--<input type="radio" name="match" value="2">-->
              <!--中心匹配-->
              <!--</label>-->
              <!--</div>-->
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
            <li class=""><a href="http://w01.ztcjl.com/web/select_keyword/combine?adgroup_id=715202952#quick" data-toggle="tab">快速选词</a></li>
            <li class=""><a href="http://w01.ztcjl.com/web/select_keyword/combine?adgroup_id=715202952#precise" data-toggle="tab">精准淘词</a></li>
            <li class="active"><a href="http://w01.ztcjl.com/web/select_keyword/combine?adgroup_id=715202952#combine" data-toggle="tab">手工组词</a></li>
            <li class=""><a href="http://w01.ztcjl.com/web/select_keyword/combine?adgroup_id=715202952#manual" data-toggle="tab">手工加词</a></li>
            <li><a href="http://w01.ztcjl.com/toolkit/select_keyword_order" target="_blank">选词预览</a></li>
        </ul>
        <div class="tab-content bg_white">
            <div class="tab-pane " id="quick">
                <div class="top_operation">
              <span class="dropdown">
                <button class="btn btn-default btn-sm" data-toggle="dropdown"><i class="iconfont mr5"></i>批量筛选</button>
                <div class="dropdown-menu db vh hold-on-click mt5 w500">
                    <div class="modal-header p10">
                        <h4>拉动滑竿过滤关键词</h4>
                    </div>
                    <div class="modal-body">
                        <div class="f12 text-info">滑竿越往右，符合条件的关键词越多，但是词的质量会越差</div>
                        <div class="mt20 pr20" id="quick_div_sliders"></div>
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
                <div>
                    <div id="quick_common_table_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table select_keyword dataTable" id="quick_common_table">
                        <thead>
                        <tr role="row"><th class="hide sorting_desc" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-sort="descending" aria-label=": activate to sort column ascending"></th><th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="关键词">关键词</th><th class="w70 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="匹配度: activate to sort column ascending"><div>匹配度</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="市场均价: activate to sort column ascending"><div>市场均价</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="展现指数: activate to sort column ascending"><div>展现指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="点击指数: activate to sort column ascending"><div>点击指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="竞争指数: activate to sort column ascending"><div>竞争指数</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="市场点击率: activate to sort column ascending"><div>市场点击率</div></th><th class="w90 sorting" role="columnheader" tabindex="0" aria-controls="quick_common_table" rowspan="1" colspan="1" aria-label="市场转化率: activate to sort column ascending"><div>市场转化率</div></th></tr></thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="9" class="dataTables_empty">没有关键词记录</td></tr></tbody></table>
                </div>
                <div class="bottom_operation">
                    <a href="javascript:;" class="add_page">&lt;&lt;添加到当前页</a>
                    <div class="r">
                        <div id="quick_pagination" class="pagination_bar">
                        </div>
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
            <div class="tab-pane active in" id="combine">
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
