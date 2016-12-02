<?php
use yii\helpers\Url;
use yii\web\View;
use app\models\Adgroup;
use app\models\Keyword;
use app\extensions\custom\yii\JsManager;
/**
 * @var $adgroup Adgroup
 * @var $this View
 */
JsManager::instance()->registers([
    "js/yii.keyword.js"
]);
?>
<section class="container-fluid">

    <ol class="breadcrumb">
        <li><a href="<?=Url::to(["/store","nick"=>$adgroup->nick])?>">首页</a></li>
        <li><a href="<?=Url::to(["/campaign","id"=>$adgroup->campaign_id])?>" id="campaign_title">
                <?=$adgroup->campaign->isTrusteeship()?"自动":"手动"?>：
                <?=$adgroup->campaign->title?></a>
        </li>
        <li class="active">
            <?=$adgroup->item?$adgroup->item->title:"-"?>
        </li>
    </ol>
    <div class="box">
        <header class="" id="operation_bar">
            <div class="line_box">

                <div class="dtr_picker_warp ml0">
                    <span class="tip" data-toggle="dtr_picker" months="1" id="select_keyword_days"
                          style="display: none;">过去七天</span>
                    <button type="button"
                            class="comiseo-daterangepicker-triggerbutton ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-secondary comiseo-daterangepicker-bottom"
                            id="drp_autogen0" role="button"><span class="ui-button-text">过去7天</span><span
                            class="ui-button-icon-secondary ui-icon ui-icon-triangle-1-s"></span></button>
                </div>

                <div class="btn-group" id="data_source">
                    <button type="button" class="btn btn-sm btn-primary active" data-source="all">汇总</button>
                    <button type="button" class="btn btn-sm btn-default" data-source="pc">计算机</button>
                    <button type="button" class="btn btn-sm btn-default" data-source="mobile">移动设备</button>
                </div>

                <span class="ml30 pl20">关键词分类：<span class="switch vm" data-toggle="switch"
                                                    id="weird_switch"></span></span>

                <span class="ml30 pl20">关键词最高限价提醒：PC
                    <span id="warn_price">
                        <span class="edit">
                            <span>5.00</span>元
                            <i class="ml5  iconfont base_color poi"></i>
                        </span>
                        <span class="save">
                            <input class="small w40" type="text" value="5.00">
                            <a href="javascript:;">保存</a>
                        </span>
                    </span>
                    移动
                    <span id="mobile_warn_price">
                        <span class="edit">
                            <span>5.00</span>元
                            <i class="ml5  iconfont base_color poi"></i>
                        </span>
                        <span class="save">
                            <input class="small w40" type="text" value="5.00">
                            <a href="javascript:;">保存</a>
                        </span>
                    </span>
                    
                </span>

                
                <span class="ml30 pl20">移动折扣：
                    <span id="adg_mobdiscount"><?=$adgroup->mobile_discount?></span>%
                    <i class="iconfont ml5 poi edit_mobdiscount base_color"></i>
                </span>

                <div class="btn-group sub" role="group" aria-label="...">
                    <button class="btn btn-sm btn-default mr10 rel" id="save_as_csv">导出关键词<i
                            class="iconfont f16 ml5"></i>

                        <div style="position: absolute; left: 0px; top: 0px; width: 103px; height: 27px; z-index: 99;">
                            <embed id="ZeroClipboard_TableToolsMovie_1" src="/site_media/jl6/swf/copy_csv_xls.swf"
                                   loop="false" menu="false" quality="best" bgcolor="#ffffff" width="103" height="27"
                                   name="ZeroClipboard_TableToolsMovie_1" align="middle" allowscriptaccess="always"
                                   allowfullscreen="false" type="application/x-shockwave-flash"
                                   pluginspage="http://www.macromedia.com/go/getflashplayer"
                                   flashvars="id=1&amp;width=103&amp;height=27" wmode="transparent">
                        </div>
                    </button>
                    <div class="btn-group dropdown" id="show_more_keyword">
                        <button type="button" class="btn btn-sm btn-default" data-toggle="dropdown">更多数据</button>
                        <div class="dropdown-menu hold-on-click dropdown-table">
                            <ul>
                                <li>
                                <span class="checkbox-inline title">
                                    <input type="checkbox">基础数据
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="impressions">展现量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="click">点击量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="ctr">点击率
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="cost">总花费
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="ppc">PPC
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="cpm">千次展现花费
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="avgpos">昨日平均排名
                                </span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                <span class="checkbox-inline title">
                                    <input type="checkbox">转化数据
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="favcount">收藏量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="favctr">收藏率
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="favpay">收藏成本
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="carttotal">购物车总数
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="paycount">成交量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="pay">成交额
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="conv">转化率
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="roi">ROI
                                </span>
                                </li>
                                <li>
                                    <span class="checkbox-inline title"></span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="s_favcount">店铺收藏量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="a_favcount">宝贝收藏量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="z_paycount">直接成交量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="j_paycount">间接成交量
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="z_pay">直接成交额
                                </span>
                                <span class="checkbox-inline">
                                    <input type="checkbox" value="j_pay">间接成交额
                                </span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                            <span class="checkbox-inline title">
                                <input type="checkbox">全网数据
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_pv">全网展现指数
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_click">全网点击指数
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_ctr">全网点击率
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_coverage">全网转化率
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_roi">全网ROI
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_cpc">全网市场均价
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_competition">全网竞争度
                            </span>
                                </li>
                                <li>
                                    <span class="checkbox-inline title"></span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="g_paycount">全网成交指数
                            </span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                            <span class="checkbox-inline title">
                                <input type="checkbox">排名设置
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="rank">当前排名
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="rob">抢排名
                            </span>
                                </li>
                            </ul>
                            <ul>
                                <li>
                            <span class="checkbox-inline title">
                                <input type="checkbox">其他数据
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="qscore">质量得分
                            </span>
                            <span class="checkbox-inline">
                                <input type="checkbox" value="create_days">养词天数
                            </span>
                                </li>
                            </ul>
                            <div>
                                <button type="button" class="btn btn-primary btn-sm">确定</button>
                                <button type="button" class="btn btn-default btn-sm">取消</button>
                            </div>
                        </div>

                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" style="margin-left:-68px;">
                                <li><a href="javascript:;" id="reset_show_cloumn">恢复默认</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <div class="pin-wrapper" style="height: 50px;">
                <div class="operate" style="width: 1841px;">
                    <span>优化策略：</span>

                    <div class="select_warp ml0" id="smart_optimize_select">
                        <span class="tip" data-toggle="dropdown">例行优化</span>
                        <ul class="dropdown-menu">
                            <li data-value="default"><span class="active">例行优化</span></li>
                            <li data-value="plus"><span>加价引流</span></li>
                            <li data-value="fall"><span>降价省油</span></li>
                        </ul>
                    </div>

                    <span class="ml20 pl30">调价力度：</span><span class="ml5 f12 gray">小</span>

                    <div id="set_percent" class="jslider-box" data-toggle="tooltip" data-placement="top"
                         data-trigger="hover" data-original-title="算法已经默认设置调价力度，您也可以调整，力度拉大时，加价的词会加更多价，降价的词降价比例也会更大哦">
                        <input type="text" value="100" style="display: none;"><span
                            class="jslider jslider_power jslider-single"><table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="jslider-bg"><i class="l"></i><i class="f"></i><i class="r"></i><i
                                                class="v"></i></div>
                                        <div class="jslider-pointer" style="left: 25.9%;"></div>
                                        <div class="jslider-pointer jslider-pointer-to"></div>
                                        <div class="jslider-label" style="display: block;"><span>30</span></div>
                                        <div class="jslider-label jslider-label-to" style="display: block;">
                                            <span>300</span></div>
                                        <div class="jslider-value" style="left: 25.9%; margin-left: 0px; right: auto;">
                                            <span>100</span></div>
                                        <div class="jslider-value jslider-value-to"><span></span></div>
                                        <div class="jslider-scale"></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table></span>
                    </div>
                    <span class="ml5 f12 gray">大</span>

                    <ul class="ul_line select_info">
                        <li class="pr10">已选中(<span class="b" id="checked_num">52</span>)</li>
                        <li class="pr10 select_status tdl poi" mode="0">PC加价(<span class="b" id="up_num">0</span>)</li>
                        <li class="pr10 select_status tdl poi" mode="1">PC降价(<span class="b" id="down_num">52</span>)
                        </li>
                        <li class="pr10 select_status tdl poi" mode="5">移动加价(<span class="b" id="up_mobile_num">4</span>)
                        </li>
                        <li class="pr10 select_status tdl poi" mode="6">移动降价(<span class="b"
                                                                                   id="down_mobile_num">19</span>)
                        </li>
                        <li class="pr10 select_status tdl poi" mode="2">删除(<span class="b" id="del_num">0</span>)</li>
                        <li class="pr10 select_status tdl poi" mode="3">匹配(<span class="b" id="match_num">0</span>)</li>

                        <li>
                            <button class="btn btn-sm btn-primary" id="submit_keywords">提交到直通车</button>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div id="keyword_table_wrapper" class="dataTables_wrapper" role="grid" style="position: relative;">
            <div class="DTTT_container"><a class="DTTT_button DTTT_button_xls" id="ToolTables_keyword_table_0"><span>Excel</span></a>
            </div>
            <table class="table table-bordered table-hover fix-table mini keyword dataTable auto-width active"
                   id="keyword_table">
                <thead>
                <tr role="row">
                    <th class="choose_column w10 sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                        aria-label="
                
                    
                
            ">
                        <div class="all">
                            <input type="checkbox" class="keyword-check-all">
                        </div>
                    </th>
                    <th class="hidden w0 sorting_desc" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-sort="descending"
                        aria-label=": activate to sort column ascending"></th>
                    <th class="w260 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                 关键词(54个) 
            ">
                        <div> 关键词(<span class="keywords_count"><?=$adgroup->getKeywords()->count()?></span>个)</div>
                    </th>
                    <th class="w60 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table" rowspan="1"
                        colspan="1" aria-label="
                PC现出价
            : activate to sort column descending">
                        <div>PC<br>现出价</div>
                    </th>
                    <th class="w70 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                PC新出价
            ">
                        <div>PC<br>新出价</div>
                    </th>
                    <th class="w60 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table" rowspan="1"
                        colspan="1" aria-label="
                移动 折：计算机出价*无线折扣后的价格。自定义价格即单独无线出价&quot;>现出价
            : activate to sort column descending">
                        <div>移动 <i class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                                   title=""
                                   data-original-title="移动价格分折扣出价和自定义出价。<br/>折：计算机出价*无线折扣后的价格。<br/>自定义价格即单独无线出价"></i><br>现出价
                        </div>
                    </th>
                    <th class="w70 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                移动新出价
            ">
                        <div>移动<br>新出价</div>
                    </th>
                    <th class="w200 selectSort  sorting_disabled" data-toggle="selectSort"
                        data-name-list="[[&quot;计算机&quot;,&quot;pc_rank&quot;],[&quot;移动&quot;,&quot;mobile_rank&quot;]]"
                        data-table="keyword_table" data-index="7" role="columnheader" rowspan="1" colspan="1"
                        aria-label="
                PC/移动 关键词在PC和移动端的当前实际综合排名(因未考虑地域竞争因素，故不同地区排名可能不同)同时如果账户/计划/宝贝处于下线状态，所有词排名将都是PC:5页以后,移动:20条以后&quot;>当前排名
                    
                
            
    
    计算机
    
    移动
    
">
                        <div>PC/移动 <i class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                                      title=""
                                      data-original-title="<div class='tl'>关键词在PC和移动端的当前实际综合排名(因未考虑地域竞争因素，故不同地区排名可能不同)<br><span class='red'>同时如果账户/计划/宝贝处于下线状态，所有词排名将都是PC:5页以后,移动:20条以后</span></div>"></i><br>当前排名
                            <i class="iconfont downicon ml5"></i>
                        </div>
                        <ul>

                            <li data-selecter="pc_rank">计算机</li>

                            <li data-selecter="mobile_rank">移动</li>

                        </ul>
                    </th>
                    <th class="w140  sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                PC/移动抢排名
            ">
                        <div>PC/移动<br>抢排名</div>
                    </th>
                    <th class="w80 selectSort  sorting_disabled" data-toggle="selectSort"
                        data-name-list="[[&quot;计算机&quot;,&quot;pc_qs&quot;],[&quot;移动&quot;,&quot;mobile_qs&quot;]]"
                        data-table="keyword_table" data-index="9" role="columnheader" rowspan="1" colspan="1"
                        aria-label="
                PC/移动 质量得分 
            
    
    计算机
    
    移动
    
">
                        <div>PC/移动 <br>质量得分 <i class="iconfont downicon"></i></div>
                        <ul>

                            <li data-selecter="pc_qs">计算机</li>

                            <li data-selecter="mobile_qs">移动</li>

                        </ul>
                    </th>
                    <th class="aw w60 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                展现量
            : activate to sort column descending">
                        <div>展现<br>量</div>
                    </th>
                    <th class="aw w60 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                点击量
            : activate to sort column descending">
                        <div>点击<br>量</div>
                    </th>
                    <th class="aw w50 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                点击率
            : activate to sort column descending">
                        <div>点击<br>率</div>
                    </th>
                    <th class="aw w60 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                总花费
            : activate to sort column descending">
                        <div>总<br>花费</div>
                    </th>
                    <th class="aw w40 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                PPC
            : activate to sort column descending">
                        <div>PPC</div>
                    </th>
                    <th class="aw w40 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                成交量
            : activate to sort column descending">
                        <div>成交<br>量</div>
                    </th>
                    <th class="aw w60 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                成交额
            : activate to sort column descending">
                        <div>成交<br>额</div>
                    </th>
                    <th class="aw w50 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                转化率
            : activate to sort column descending">
                        <div>转化<br>率</div>
                    </th>
                    <th class="aw w40 sorting" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-label="
                ROI
            : activate to sort column descending">
                        <div>ROI</div>
                    </th>
                </tr>
                </thead>

                <tbody role="alert" aria-live="polite" aria-relevant="all">
                <tr class="unsort odd">
                    <td class=" "></td>
                    <td class="hide  sorting_1"></td>
                    <td class=" ">
                        <div class="input-group custom_search">
            <span class="select_warp btn-group" id="search_type">
                <button type="button" class="tip btn btn-default" data-toggle="dropdown">模糊</button>
                <ul class="dropdown-menu">
                    <li data-value="0"><span>模糊</span></li>
                    <li data-value="1"><span>精准</span></li>
                </ul>
            </span>
                            <input type="text" class="form-control search_val" placeholder="输入关键词">
            <span class="input-group-btn search_btn">
                <button class="btn btn-default" type="button"><i class="iconfont f16"></i></button>
            </span>
                        </div>
                    </td>
                    <td class=" "></td>
                    <td class=" ">
                        <button class="btn btn-xs btn-default" id="recovery_all">全部重置</button>
                    </td>
                    <td class=" "></td>
                    <td class=" ">
                        <button class="btn btn-xs btn-default" id="recovery_mobile_all">全部重置</button>
                    </td>
                    <td class=" ">
                        <span id="rank_time">--:--</span>排名
                        <button class="btn btn-xs btn-default" id="adgroup-refresh-rankings" data-url="<?=Url::to(["/adgroup/refresh-rankings","id"=>$adgroup->adgroup_id])?>">立即更新</button>
                    </td>
                    <td class=" ">--</td>
                    <td class=" ">
                        <span class="b">定向</span>
                    </td>

                    <td class="striped ">-</td>
                    <td class="striped ">-</td>
                    <td class="striped ">-</td>
                    <td class="striped ">-</td>
                    <td class="striped ">-</td>


                    <td class=" ">-</td>


                    <td class=" ">-</td>


                    <td class=" ">-</td>
                    <td class=" ">-</td>


                </tr>
                <?php
                if($adgroup->keywords){
                    foreach($adgroup->keywords as $keyword){
                        echo $this->render("/keyword/_keyword",[
                            "keyword"=>$keyword
                        ]);
                    }
                }
                ?>
                </tbody>
            </table>
        </div>


        <div id="keyword_no_data" style="display: none;">
            <h4>没有关键词数据,请到<a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=715202952">选词</a>页面添加关键词
            </h4>
        </div>
    </div>
</section>
