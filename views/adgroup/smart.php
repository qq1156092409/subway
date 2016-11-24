<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/11/22
 * Time: 22:26
 */
?>
<section class="container-fluid">

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
                    <span id="adg_mobdiscount">190</span>%
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
                            <input type="checkbox">
                        </div>
                    </th>
                    <th class="hidden w0 sorting_desc" role="columnheader" tabindex="0" aria-controls="keyword_table"
                        rowspan="1" colspan="1" aria-sort="descending"
                        aria-label=": activate to sort column ascending"></th>
                    <th class="w260 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="
                 关键词(54个) 
            ">
                        <div> 关键词(<span class="keywords_count">54</span>个)</div>
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
                        <button class="btn btn-xs btn-default" id="rank_all">立即更新</button>
                    </td>
                    <td class=" ">--</td>
                    <td class=" ">
                        <span class="b">定向</span>
                    </td>

                    <td class="striped ">0</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364525" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CM RH" data-tree-code="ROI" data-roi="16.07"
                    data-g_cpc="0.54" data-cpc="0.60" data-ctr="2.11" data-click="6" data-qscore="7"
                    data-wireless_qscore="9" data-max_price="0.49" data-max_mobile_price="0.93" data-g_click="365"
                    data-match="4" data-mnt="0" data-new_price="0.44" data-new_mobile_price="0.95" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="even down mobileUp">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女士高腰复古牛仔裤">
                            女士高腰复古牛仔裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.49</span>0.49</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.44">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.93</span><span
                            class="tag tag-gary">折</span>0.93
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.95">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">284</td>
                    <td class="striped ">6</td>
                    <td class="striped ">2.11%</td>
                    <td class="striped ">3.61</td>
                    <td class="striped ">0.60</td>


                    <td class=" ">1</td>


                    <td class=" ">58.00</td>


                    <td class=" ">16.67%</td>
                    <td class="red ">16.07</td>


                </tr>
                <tr id="299044364579" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WM KM TH CM RH" data-tree-code="ROI" data-roi="4.18"
                    data-g_cpc="0.30" data-cpc="0.68" data-ctr="7.85" data-click="41" data-qscore="7"
                    data-wireless_qscore="7" data-max_price="0.80" data-max_mobile_price="1.52" data-g_click="6"
                    data-match="4" data-mnt="0" data-new_price="0.75" data-new_mobile_price="1.54" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="odd down mobileUp">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=韩版牛仔裤女复古">
                            韩版牛仔裤女复古
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.80</span>0.80</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.75">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.52</span><span
                            class="tag tag-gary">折</span>1.52
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.54">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">522</td>
                    <td class="striped ">41</td>
                    <td class="striped ">7.85%</td>
                    <td class="striped ">27.77</td>
                    <td class="striped ">0.68</td>


                    <td class=" ">2</td>


                    <td class=" ">116.00</td>


                    <td class=" ">4.88%</td>
                    <td class="red ">4.18</td>


                </tr>
                <tr id="299075082283" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YH QM WH KM TH CM RH" data-tree-code="ROI" data-roi="5.94"
                    data-g_cpc="0.74" data-cpc="0.52" data-ctr="8.97" data-click="55" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.44" data-max_mobile_price="0.83" data-g_click="341"
                    data-match="4" data-mnt="0" data-new_price="0.39" data-new_mobile_price="0.85" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="even down mobileUp">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿长裤">
                            阔腿长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.44</span>0.44</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.39">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.83</span><span
                            class="tag tag-gary">折</span>0.83
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.85">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">613</td>
                    <td class="striped ">55</td>
                    <td class="striped ">8.97%</td>
                    <td class="striped ">28.59</td>
                    <td class="striped ">0.52</td>


                    <td class=" ">3</td>


                    <td class=" ">169.90</td>


                    <td class=" ">5.45%</td>
                    <td class="red ">5.94</td>


                </tr>
                <tr id="300313255535" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CM RH" data-tree-code="ROI" data-roi="15.68"
                    data-g_cpc="0.49" data-cpc="0.84" data-ctr="2.56" data-click="4" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.58" data-max_mobile_price="1.10" data-g_click="314"
                    data-match="4" data-mnt="0" data-new_price="0.53" data-new_mobile_price="1.12" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="odd down mobileUp">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤子 女 宽松 长裤">
                            裤子 女 宽松 长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.58</span>0.58</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.53">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.10</span><span
                            class="tag tag-gary">折</span>1.10
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.12">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">156</td>
                    <td class="striped ">4</td>
                    <td class="striped ">2.56%</td>
                    <td class="striped ">3.38</td>
                    <td class="striped ">0.84</td>


                    <td class=" ">1</td>


                    <td class=" ">53.00</td>


                    <td class=" ">25.00%</td>
                    <td class="red ">15.68</td>


                </tr>
                <tr id="299044364524" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CH RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.56" data-cpc="0.91" data-ctr="4.39" data-click="21" data-qscore="7"
                    data-wireless_qscore="9" data-max_price="0.48" data-max_mobile_price="0.91" data-g_click="940"
                    data-match="4" data-mnt="0" data-new_price="0.43" data-new_mobile_price="0.81" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=bf牛仔裤长裤女">
                            bf牛仔裤长裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.48</span>0.48</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.43">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.91</span><span
                            class="tag tag-gary">折</span>0.91
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.81">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">478</td>
                    <td class="striped ">21</td>
                    <td class="striped ">4.39%</td>
                    <td class="striped ">19.08</td>
                    <td class="striped ">0.91</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364564" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KM TM CM RM" data-tree-code="ROI" data-roi="1.26"
                    data-g_cpc="0.72" data-cpc="0.60" data-ctr="4.91" data-click="77" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.48" data-max_mobile_price="0.91" data-g_click="947"
                    data-match="4" data-mnt="0" data-new_price="0.43" data-new_mobile_price="0.86" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤 牛仔 长裤 女">
                            阔腿裤 牛仔 长裤 女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.48</span>0.48</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.43">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.91</span><span
                            class="tag tag-gary">折</span>0.91
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.86">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">1567</td>
                    <td class="striped ">77</td>
                    <td class="striped ">4.91%</td>
                    <td class="striped ">45.99</td>
                    <td class="striped ">0.60</td>


                    <td class=" ">1</td>


                    <td class=" ">58.00</td>


                    <td class=" ">1.30%</td>
                    <td class="red ">1.26</td>


                </tr>
                <tr id="299044364578" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.36" data-cpc="0.83" data-ctr="4.48" data-click="9" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.60" data-max_mobile_price="1.14" data-g_click="232"
                    data-match="4" data-mnt="0" data-new_price="0.55" data-new_mobile_price="1.02" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=韩版牛仔裤女宽松长裤">
                            韩版牛仔裤女宽松长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.60</span>0.60</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.55">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.14</span><span
                            class="tag tag-gary">折</span>1.14
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.02">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">201</td>
                    <td class="striped ">9</td>
                    <td class="striped ">4.48%</td>
                    <td class="striped ">7.46</td>
                    <td class="striped ">0.83</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364582" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WM KL TM CH RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.30" data-cpc="1.01" data-ctr="3.88" data-click="4" data-qscore="7"
                    data-wireless_qscore="7" data-max_price="0.69" data-max_mobile_price="1.31" data-g_click="69"
                    data-match="4" data-mnt="0" data-new_price="0.64" data-new_mobile_price="1.17" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=韩国牛仔裤女 宽松">
                            韩国牛仔裤女 宽松
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.69</span>0.69</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.64">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.31</span><span
                            class="tag tag-gary">折</span>1.31
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.17">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">103</td>
                    <td class="striped ">4</td>
                    <td class="striped ">3.88%</td>
                    <td class="striped ">4.04</td>
                    <td class="striped ">1.01</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364591" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.88" data-cpc="0.76" data-ctr="5.17" data-click="21" data-qscore="7"
                    data-wireless_qscore="9" data-max_price="0.54" data-max_mobile_price="1.02" data-g_click="595"
                    data-match="4" data-mnt="0" data-new_price="0.49" data-new_mobile_price="0.91" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰牛仔裤宽松">
                            高腰牛仔裤宽松
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.54</span>0.54</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.49">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.02</span><span
                            class="tag tag-gary">折</span>1.02
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.91">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">406</td>
                    <td class="striped ">21</td>
                    <td class="striped ">5.17%</td>
                    <td class="striped ">15.99</td>
                    <td class="striped ">0.76</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364593" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.52" data-cpc="0.81" data-ctr="6.25" data-click="12" data-qscore="7"
                    data-wireless_qscore="9" data-max_price="0.69" data-max_mobile_price="1.31" data-g_click="156"
                    data-match="4" data-mnt="0" data-new_price="0.64" data-new_mobile_price="1.17" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰裤 牛仔复古">
                            高腰裤 牛仔复古
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.69</span>0.69</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.64">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.31</span><span
                            class="tag tag-gary">折</span>1.31
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.17">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">192</td>
                    <td class="striped ">12</td>
                    <td class="striped ">6.25%</td>
                    <td class="striped ">9.76</td>
                    <td class="striped ">0.81</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364599" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TH CH RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="1.13" data-cpc="0.93" data-ctr="7.69" data-click="1" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.65" data-max_mobile_price="1.23" data-g_click="187"
                    data-match="4" data-mnt="0" data-new_price="0.60" data-new_mobile_price="1.10" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰牛仔裤 女 长裤 秋">
                            高腰牛仔裤 女 长裤 秋
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.65</span>0.65</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.60">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.23</span><span
                            class="tag tag-gary">折</span>1.23
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.10">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">13</td>
                    <td class="striped ">1</td>
                    <td class="striped ">7.69%</td>
                    <td class="striped ">0.93</td>
                    <td class="striped ">0.93</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082304" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TL CH RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.97" data-cpc="1.10" data-ctr="1.36" data-click="2" data-qscore="8"
                    data-wireless_qscore="9" data-max_price="0.58" data-max_mobile_price="1.10" data-g_click="1968"
                    data-match="4" data-mnt="0" data-new_price="0.53" data-new_mobile_price="0.99" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤子 牛仔长裤 女 秋季">
                            裤子 牛仔长裤 女 秋季
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.58</span>0.58</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.53">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.10</span><span
                            class="tag tag-gary">折</span>1.10
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.99">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">147</td>
                    <td class="striped ">2</td>
                    <td class="striped ">1.36%</td>
                    <td class="striped ">2.21</td>
                    <td class="striped ">1.10</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082325" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KM TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.55" data-cpc="0.83" data-ctr="3.95" data-click="40" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.60" data-max_mobile_price="1.14" data-g_click="48"
                    data-match="4" data-mnt="0" data-new_price="0.55" data-new_mobile_price="1.02" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔裤女阔脚裤">
                            阔腿牛仔裤女阔脚裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.60</span>0.60</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.55">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.14</span><span
                            class="tag tag-gary">折</span>1.14
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.02">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">1013</td>
                    <td class="striped ">40</td>
                    <td class="striped ">3.95%</td>
                    <td class="striped ">33.31</td>
                    <td class="striped ">0.83</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082342" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.35" data-cpc="0.72" data-ctr="3.35" data-click="9" data-qscore="8"
                    data-wireless_qscore="9" data-max_price="0.51" data-max_mobile_price="0.96" data-g_click="26"
                    data-match="4" data-mnt="0" data-new_price="0.46" data-new_mobile_price="0.86" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔脚裤牛仔裤女">
                            阔脚裤牛仔裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.51</span>0.51</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.46">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.96</span><span
                            class="tag tag-gary">折</span>0.96
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.86">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">269</td>
                    <td class="striped ">9</td>
                    <td class="striped ">3.35%</td>
                    <td class="striped ">6.51</td>
                    <td class="striped ">0.72</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299070329912" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CH RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.58" data-cpc="0.94" data-ctr="3.47" data-click="20" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.69" data-max_mobile_price="1.31" data-g_click="299"
                    data-match="4" data-mnt="0" data-new_price="0.64" data-new_mobile_price="1.17" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤宽松女牛仔">
                            长裤宽松女牛仔
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.69</span>0.69</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.64">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.31</span><span
                            class="tag tag-gary">折</span>1.31
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.17">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">576</td>
                    <td class="striped ">20</td>
                    <td class="striped ">3.47%</td>
                    <td class="striped ">18.87</td>
                    <td class="striped ">0.94</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300313255556" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CH RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.53" data-cpc="0.91" data-ctr="0.58" data-click="1" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.57" data-max_mobile_price="1.08" data-g_click="4"
                    data-match="4" data-mnt="0" data-new_price="0.52" data-new_mobile_price="0.97" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=韩版牛仔高腰长裤女">
                            韩版牛仔高腰长裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.57</span>0.57</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.52">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.08</span><span
                            class="tag tag-gary">折</span>1.08
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.97">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">171</td>
                    <td class="striped ">1</td>
                    <td class="striped ">0.58%</td>
                    <td class="striped ">0.91</td>
                    <td class="striped ">0.91</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300313255572" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.55" data-cpc="0.78" data-ctr="3.54" data-click="4" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.57" data-max_mobile_price="1.08" data-g_click="1416"
                    data-match="4" data-mnt="0" data-new_price="0.52" data-new_mobile_price="0.97" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤女宽松">
                            长裤女宽松
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.57</span>0.57</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.52">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.08</span><span
                            class="tag tag-gary">折</span>1.08
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.97">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">113</td>
                    <td class="striped ">4</td>
                    <td class="striped ">3.54%</td>
                    <td class="striped ">3.11</td>
                    <td class="striped ">0.78</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818067" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CH RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.70" data-cpc="0.95" data-ctr="4.17" data-click="21" data-qscore="7"
                    data-wireless_qscore="8" data-max_price="0.67" data-max_mobile_price="1.27" data-g_click="4814"
                    data-match="4" data-mnt="0" data-new_price="0.62" data-new_mobile_price="1.14" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰裤子">
                            高腰裤子
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.67</span>0.67</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.62">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.27</span><span
                            class="tag tag-gary">折</span>1.27
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.14">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="8" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">8
            </span>

                    </td>

                    <td class="striped ">504</td>
                    <td class="striped ">21</td>
                    <td class="striped ">4.17%</td>
                    <td class="striped ">20.00</td>
                    <td class="striped ">0.95</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818069" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.75" data-cpc="0.71" data-ctr="4.81" data-click="9" data-qscore="6"
                    data-wireless_qscore="10" data-max_price="0.56" data-max_mobile_price="1.06" data-g_click="376"
                    data-match="4" data-mnt="0" data-new_price="0.51" data-new_mobile_price="0.95" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰阔腿裤长裤">
                            高腰阔腿裤长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.56</span>0.56</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.51">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.06</span><span
                            class="tag tag-gary">折</span>1.06
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.95">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="6" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">6</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">187</td>
                    <td class="striped ">9</td>
                    <td class="striped ">4.81%</td>
                    <td class="striped ">6.39</td>
                    <td class="striped ">0.71</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818072" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CH RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.88" data-cpc="0.89" data-ctr="4.38" data-click="7" data-qscore="6"
                    data-wireless_qscore="10" data-max_price="0.65" data-max_mobile_price="1.23" data-g_click="133"
                    data-match="4" data-mnt="0" data-new_price="0.60" data-new_mobile_price="1.10" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰阔腿长裤女">
                            高腰阔腿长裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.65</span>0.65</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.60">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.23</span><span
                            class="tag tag-gary">折</span>1.23
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.10">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="6" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">6</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">160</td>
                    <td class="striped ">7</td>
                    <td class="striped ">4.38%</td>
                    <td class="striped ">6.24</td>
                    <td class="striped ">0.89</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818083" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CH RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.78" data-cpc="0.98" data-ctr="3.32" data-click="7" data-qscore="7"
                    data-wireless_qscore="9" data-max_price="0.73" data-max_mobile_price="1.38" data-g_click="1559"
                    data-match="4" data-mnt="0" data-new_price="0.68" data-new_mobile_price="1.24" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="even down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰裤子女长裤">
                            高腰裤子女长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.73</span>0.73</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.68">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.38</span><span
                            class="tag tag-gary">折</span>1.38
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.24">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">211</td>
                    <td class="striped ">7</td>
                    <td class="striped ">3.32%</td>
                    <td class="striped ">6.83</td>
                    <td class="striped ">0.98</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818084" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.65" data-cpc="0.72" data-ctr="4.00" data-click="1" data-qscore="5"
                    data-wireless_qscore="10" data-max_price="0.62" data-max_mobile_price="1.17" data-g_click="35"
                    data-match="4" data-mnt="0" data-new_price="0.57" data-new_mobile_price="1.05" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000"
                    class="odd down mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰宽松长裤女">
                            高腰宽松长裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.62</span>0.62</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.57">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.17</span><span
                            class="tag tag-gary">折</span>1.17
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.05">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="5" pc_creative_score="2" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">5</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">25</td>
                    <td class="striped ">1</td>
                    <td class="striped ">4.00%</td>
                    <td class="striped ">0.72</td>
                    <td class="striped ">0.72</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364535" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WM KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.30" data-cpc="0.61" data-ctr="1.35" data-click="1" data-qscore="7"
                    data-wireless_qscore="7" data-max_price="0.65" data-max_mobile_price="1.23" data-g_click="0"
                    data-match="4" data-mnt="0" data-new_price="0.60" data-new_mobile_price="1.23" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=韩版排扣高腰牛仔裤">
                            韩版排扣高腰牛仔裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.65</span>0.65</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.60">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.23</span><span
                            class="tag tag-gary">折</span>1.23
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.23">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">74</td>
                    <td class="striped ">1</td>
                    <td class="striped ">1.35%</td>
                    <td class="striped ">0.61</td>
                    <td class="striped ">0.61</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364554" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QH WH" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.71"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="8" data-wireless_qscore="10"
                    data-max_price="0.41" data-max_mobile_price="0.77" data-g_click="20" data-match="4" data-mnt="0"
                    data-new_price="0.36" data-new_mobile_price="0.77" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=超高腰牛仔裤女长裤">
                            超高腰牛仔裤女长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.41</span>0.41</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.36">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.77</span><span
                            class="tag tag-gary">折</span>0.77
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.77">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">23</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364559" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QH WH KL TH CL RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.64" data-cpc="0.44" data-ctr="11.27" data-click="23" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.32" data-max_mobile_price="0.60" data-g_click="306"
                    data-match="4" data-mnt="0" data-new_price="0.27" data-new_mobile_price="0.60" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤 牛仔长裤">
                            阔腿裤 牛仔长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.32</span>0.32</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.27">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.60</span><span
                            class="tag tag-gary">折</span>0.60
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.60">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">204</td>
                    <td class="striped ">23</td>
                    <td class="striped ">11.27%</td>
                    <td class="striped ">10.20</td>
                    <td class="striped ">0.44</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364587" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WM" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.50"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="8" data-wireless_qscore="7"
                    data-max_price="0.66" data-max_mobile_price="1.25" data-g_click="54" data-match="4" data-mnt="0"
                    data-new_price="0.61" data-new_mobile_price="1.25" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=韩版牛仔裤女秋">
                            韩版牛仔裤女秋
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.66</span>0.66</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.61">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.25</span><span
                            class="tag tag-gary">折</span>1.25
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.25">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">36</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364594" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.56" data-cpc="0.61" data-ctr="2.11" data-click="2" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.64" data-max_mobile_price="1.21" data-g_click="9"
                    data-match="4" data-mnt="0" data-new_price="0.59" data-new_mobile_price="1.21" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰牛仔裤 宽松长裤">
                            高腰牛仔裤 宽松长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.64</span>0.64</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.59">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.21</span><span
                            class="tag tag-gary">折</span>1.21
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.21">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">95</td>
                    <td class="striped ">2</td>
                    <td class="striped ">2.11%</td>
                    <td class="striped ">1.22</td>
                    <td class="striped ">0.61</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082280" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KH TH CM RH" data-tree-code="ROI" data-roi="1.61"
                    data-g_cpc="0.71" data-cpc="0.70" data-ctr="7.00" data-click="103" data-qscore="9"
                    data-wireless_qscore="10" data-max_price="0.59" data-max_mobile_price="1.12" data-g_click="198"
                    data-match="4" data-mnt="0" data-new_price="0.54" data-new_mobile_price="1.12" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔长裤">
                            阔腿牛仔长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.59</span>0.59</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.54">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.12</span><span
                            class="tag tag-gary">折</span>1.12
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.12">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="9" pc_creative_score="5" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">9</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">1472</td>
                    <td class="striped ">103</td>
                    <td class="striped ">7.00%</td>
                    <td class="striped ">71.89</td>
                    <td class="striped ">0.70</td>


                    <td class=" ">2</td>


                    <td class=" ">116.00</td>


                    <td class=" ">1.94%</td>
                    <td class="red ">1.61</td>


                </tr>
                <tr id="299075082282" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WM KL TM CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.30" data-cpc="0.65" data-ctr="5.71" data-click="10" data-qscore="7"
                    data-wireless_qscore="7" data-max_price="0.56" data-max_mobile_price="1.06" data-g_click="0"
                    data-match="4" data-mnt="0" data-new_price="0.51" data-new_mobile_price="1.06" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔脚牛仔长裤女">
                            阔脚牛仔长裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.56</span>0.56</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.51">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.06</span><span
                            class="tag tag-gary">折</span>1.06
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.06">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">175</td>
                    <td class="striped ">10</td>
                    <td class="striped ">5.71%</td>
                    <td class="striped ">6.52</td>
                    <td class="striped ">0.65</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082287" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.86" data-cpc="0.65" data-ctr="3.48" data-click="26" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.49" data-max_mobile_price="0.93" data-g_click="152"
                    data-match="4" data-mnt="0" data-new_price="0.44" data-new_mobile_price="0.93" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤女长裤">
                            阔腿裤女长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.49</span>0.49</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.44">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.93</span><span
                            class="tag tag-gary">折</span>0.93
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.93">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">747</td>
                    <td class="striped ">26</td>
                    <td class="striped ">3.48%</td>
                    <td class="striped ">16.82</td>
                    <td class="striped ">0.65</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082288" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.74" data-cpc="0.58" data-ctr="3.96" data-click="24" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.49" data-max_mobile_price="0.93" data-g_click="62"
                    data-match="4" data-mnt="0" data-new_price="0.44" data-new_mobile_price="0.93" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔长裤女">
                            阔腿牛仔长裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.49</span>0.49</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.44">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.93</span><span
                            class="tag tag-gary">折</span>0.93
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.93">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">606</td>
                    <td class="striped ">24</td>
                    <td class="striped ">3.96%</td>
                    <td class="striped ">13.89</td>
                    <td class="striped ">0.58</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082290" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KH TH CM RH" data-tree-code="ROI" data-roi="2.44"
                    data-g_cpc="0.56" data-cpc="0.73" data-ctr="8.22" data-click="755" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.70" data-max_mobile_price="1.33" data-g_click="1040"
                    data-match="4" data-mnt="0" data-new_price="0.65" data-new_mobile_price="1.33" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿高腰牛仔裤">
                            阔腿高腰牛仔裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.70</span>0.70</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.65">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.33</span><span
                            class="tag tag-gary">折</span>1.33
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.33">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">9180</td>
                    <td class="striped ">755</td>
                    <td class="striped ">8.22%</td>
                    <td class="striped ">547.55</td>
                    <td class="striped ">0.73</td>


                    <td class=" ">23</td>


                    <td class=" ">1335.90</td>


                    <td class=" ">3.05%</td>
                    <td class="red ">2.44</td>


                </tr>
                <tr id="299075082292" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.57"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="8" data-wireless_qscore="10"
                    data-max_price="0.79" data-max_mobile_price="1.50" data-g_click="53" data-match="4" data-mnt="0"
                    data-new_price="0.74" data-new_mobile_price="1.50" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤子 女 韩版 高腰长裤牛仔">
                            裤子 女 韩版 高腰长裤牛仔
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.79</span>0.79</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.74">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.50</span><span
                            class="tag tag-gary">折</span>1.50
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.50">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">42</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082317" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QM WH" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.70"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="7" data-wireless_qscore="10"
                    data-max_price="0.32" data-max_mobile_price="0.60" data-g_click="243" data-match="4" data-mnt="0"
                    data-new_price="0.27" data-new_mobile_price="0.60" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿女长裤">
                            阔腿女长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.32</span>0.32</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.27">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.60</span><span
                            class="tag tag-gary">折</span>0.60
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.60">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">41</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082324" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QH WH KL TL CL RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.64" data-cpc="0.36" data-ctr="1.60" data-click="2" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.41" data-max_mobile_price="0.77" data-g_click="3"
                    data-match="4" data-mnt="0" data-new_price="0.36" data-new_mobile_price="0.77" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔脚牛仔裤 长裤 女">
                            阔脚牛仔裤 长裤 女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.41</span>0.41</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.36">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.77</span><span
                            class="tag tag-gary">折</span>0.77
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.77">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">125</td>
                    <td class="striped ">2</td>
                    <td class="striped ">1.60%</td>
                    <td class="striped ">0.73</td>
                    <td class="striped ">0.36</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082334" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KM TM CM RM" data-tree-code="ROI" data-roi="1.33"
                    data-g_cpc="0.46" data-cpc="0.68" data-ctr="6.10" data-click="64" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.55" data-max_mobile_price="1.04" data-g_click="399"
                    data-match="4" data-mnt="0" data-new_price="0.50" data-new_mobile_price="1.04" data-optm_type="2"
                    data-locked="0" data-weird-desc="6000000000" data-weird-asc="1000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿牛仔裤 女 高腰">
                            阔腿牛仔裤 女 高腰
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.55</span>0.55</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.50">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.04</span><span
                            class="tag tag-gary">折</span>1.04
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.04">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">1049</td>
                    <td class="striped ">64</td>
                    <td class="striped ">6.10%</td>
                    <td class="striped ">43.51</td>
                    <td class="striped ">0.68</td>


                    <td class=" ">1</td>


                    <td class=" ">58.00</td>


                    <td class=" ">1.56%</td>
                    <td class="red ">1.33</td>


                </tr>
                <tr id="299075082336" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.73"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="6" data-wireless_qscore="9"
                    data-max_price="0.70" data-max_mobile_price="1.33" data-g_click="127" data-match="4" data-mnt="0"
                    data-new_price="0.65" data-new_mobile_price="1.33" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤子女 牛仔裤 高腰">
                            裤子女 牛仔裤 高腰
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.70</span>0.70</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.65">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.33</span><span
                            class="tag tag-gary">折</span>1.33
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.33">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="6" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">6</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">20</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082344" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QM WM" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.37"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="7" data-wireless_qscore="7"
                    data-max_price="0.37" data-max_mobile_price="0.70" data-g_click="197" data-match="4" data-mnt="0"
                    data-new_price="0.32" data-new_mobile_price="0.70" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤韩国">
                            阔腿裤韩国
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.37</span>0.37</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.32">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.70</span><span
                            class="tag tag-gary">折</span>0.70
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.70">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">24</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082346" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TM CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.60" data-cpc="0.68" data-ctr="5.00" data-click="1" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.67" data-max_mobile_price="1.27" data-g_click="12"
                    data-match="4" data-mnt="0" data-new_price="0.62" data-new_mobile_price="1.27" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤水洗牛仔裤女">
                            长裤水洗牛仔裤女
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.67</span>0.67</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.62">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.27</span><span
                            class="tag tag-gary">折</span>1.27
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.27">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">20</td>
                    <td class="striped ">1</td>
                    <td class="striped ">5.00%</td>
                    <td class="striped ">0.68</td>
                    <td class="striped ">0.68</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299070329915" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YH QM WH KL TH CL RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.70" data-cpc="0.47" data-ctr="6.90" data-click="8" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.45" data-max_mobile_price="0.85" data-g_click="65"
                    data-match="4" data-mnt="0" data-new_price="0.40" data-new_mobile_price="0.85" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤 长裤 高腰 牛仔">
                            阔腿裤 长裤 高腰 牛仔
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.45</span>0.45</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.40">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.85</span><span
                            class="tag tag-gary">折</span>0.85
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.85">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">116</td>
                    <td class="striped ">8</td>
                    <td class="striped ">6.90%</td>
                    <td class="striped ">3.80</td>
                    <td class="striped ">0.47</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299070329937" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QM WH KL TM CL RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.74" data-cpc="0.19" data-ctr="6.25" data-click="1" data-qscore="6"
                    data-wireless_qscore="10" data-max_price="0.32" data-max_mobile_price="0.60" data-g_click="193"
                    data-match="4" data-mnt="0" data-new_price="0.27" data-new_mobile_price="0.60" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰阔腿裤女长裤">
                            高腰阔腿裤女长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.32</span>0.32</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.27">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.60</span><span
                            class="tag tag-gary">折</span>0.60
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.60">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="6" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">6</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">16</td>
                    <td class="striped ">1</td>
                    <td class="striped ">6.25%</td>
                    <td class="striped ">0.19</td>
                    <td class="striped ">0.19</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299070329913" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QH WH KL TM CL RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.84" data-cpc="0.40" data-ctr="4.38" data-click="7" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.34" data-max_mobile_price="0.64" data-g_click="53"
                    data-match="4" data-mnt="0" data-new_price="0.29" data-new_mobile_price="0.64" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔脚裤女牛仔">
                            阔脚裤女牛仔
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.34</span>0.34</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.29">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.64</span><span
                            class="tag tag-gary">折</span>0.64
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.64">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">160</td>
                    <td class="striped ">7</td>
                    <td class="striped ">4.38%</td>
                    <td class="striped ">2.83</td>
                    <td class="striped ">0.40</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082263" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WM" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.30"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="7" data-wireless_qscore="7"
                    data-max_price="0.76" data-max_mobile_price="1.44" data-g_click="0" data-match="4" data-mnt="0"
                    data-new_price="0.71" data-new_mobile_price="1.44" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰磨白牛仔裤">
                            高腰磨白牛仔裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.76</span>0.76</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.71">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.44</span><span
                            class="tag tag-gary">折</span>1.44
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.44">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="7" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">7
            </span>

                    </td>

                    <td class="striped ">13</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299075082279" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.86" data-cpc="0.55" data-ctr="4.73" data-click="8" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.55" data-max_mobile_price="1.04" data-g_click="931"
                    data-match="4" data-mnt="0" data-new_price="0.50" data-new_mobile_price="1.04" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=阔腿裤长裤">
                            阔腿裤长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.55</span>0.55</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.50">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.04</span><span
                            class="tag tag-gary">折</span>1.04
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.04">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">169</td>
                    <td class="striped ">8</td>
                    <td class="striped ">4.73%</td>
                    <td class="striped ">4.37</td>
                    <td class="striped ">0.55</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300313255537" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QH WH" data-tree-code="PV" data-roi="0.00" data-g_cpc="0.50"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="8" data-wireless_qscore="9"
                    data-max_price="0.41" data-max_mobile_price="0.77" data-g_click="58" data-match="4" data-mnt="0"
                    data-new_price="0.36" data-new_mobile_price="0.77" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女生长裤">
                            女生长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.41</span>0.41</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.36">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.77</span><span
                            class="tag tag-gary">折</span>0.77
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.77">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">18</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300313255543" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TM CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.30" data-cpc="0.48" data-ctr="4.82" data-click="4" data-qscore="7"
                    data-wireless_qscore="9" data-max_price="0.75" data-max_mobile_price="1.42" data-g_click="0"
                    data-match="4" data-mnt="0" data-new_price="0.70" data-new_mobile_price="1.42" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=女式韩版BF裤">
                            女式韩版BF裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.75</span>0.75</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.70">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.42</span><span
                            class="tag tag-gary">折</span>1.42
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.42">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">83</td>
                    <td class="striped ">4</td>
                    <td class="striped ">4.82%</td>
                    <td class="striped ">1.92</td>
                    <td class="striped ">0.48</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300313255578" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TH CL RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.94" data-cpc="0.24" data-ctr="7.41" data-click="2" data-qscore="8"
                    data-wireless_qscore="10" data-max_price="0.64" data-max_mobile_price="1.21" data-g_click="746"
                    data-match="4" data-mnt="0" data-new_price="0.59" data-new_mobile_price="1.21" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤女秋季">
                            长裤女秋季
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.64</span>0.64</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.59">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.21</span><span
                            class="tag tag-gary">折</span>1.21
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.21">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">27</td>
                    <td class="striped ">2</td>
                    <td class="striped ">7.41%</td>
                    <td class="striped ">0.48</td>
                    <td class="striped ">0.24</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818060" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YH QM WH KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.57" data-cpc="0.54" data-ctr="2.35" data-click="2" data-qscore="5"
                    data-wireless_qscore="10" data-max_price="0.44" data-max_mobile_price="0.83" data-g_click="1"
                    data-match="4" data-mnt="0" data-new_price="0.39" data-new_mobile_price="0.83" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤女常规">
                            长裤女常规
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.44</span>0.44</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.39">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.83</span><span
                            class="tag tag-gary">折</span>0.83
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.83">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="5" pc_creative_score="2" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">5</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">85</td>
                    <td class="striped ">2</td>
                    <td class="striped ">2.35%</td>
                    <td class="striped ">1.07</td>
                    <td class="striped ">0.54</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818064" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.83" data-cpc="0.69" data-ctr="1.40" data-click="2" data-qscore="6"
                    data-wireless_qscore="9" data-max_price="0.60" data-max_mobile_price="1.14" data-g_click="623"
                    data-match="4" data-mnt="0" data-new_price="0.55" data-new_mobile_price="1.14" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰长裤">
                            高腰长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.60</span>0.60</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.55">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.14</span><span
                            class="tag tag-gary">折</span>1.14
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.14">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="6" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">6</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">143</td>
                    <td class="striped ">2</td>
                    <td class="striped ">1.40%</td>
                    <td class="striped ">1.39</td>
                    <td class="striped ">0.69</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818066" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL ML YM QM WH KL TH CL RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.78" data-cpc="0.31" data-ctr="7.43" data-click="13" data-qscore="7"
                    data-wireless_qscore="10" data-max_price="0.33" data-max_mobile_price="0.62" data-g_click="1509"
                    data-match="4" data-mnt="0" data-new_price="0.28" data-new_mobile_price="0.62" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰阔腿长裤">
                            高腰阔腿长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.33</span>0.33</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.28">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.62</span><span
                            class="tag tag-gary">折</span>0.62
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.62">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">175</td>
                    <td class="striped ">13</td>
                    <td class="striped ">7.43%</td>
                    <td class="striped ">4.02</td>
                    <td class="striped ">0.31</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818081" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QM WH" data-tree-code="PV" data-roi="0.00" data-g_cpc="1.10"
                    data-cpc="0.00" data-ctr="0.00" data-click="0" data-qscore="7" data-wireless_qscore="10"
                    data-max_price="0.65" data-max_mobile_price="1.23" data-g_click="373" data-match="4" data-mnt="0"
                    data-new_price="0.60" data-new_mobile_price="1.23" data-optm_type="2" data-locked="0"
                    data-weird-desc="3000000000" data-weird-asc="4000000000" class="even down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰裤牛仔长裤">
                            高腰裤牛仔长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.65</span>0.65</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.60">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.23</span><span
                            class="tag tag-gary">折</span>1.23
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.23">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="10" yd_creative_score="5" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">7</span><span class="mobile_qs left_dotted db pct50 l">10
            </span>

                    </td>

                    <td class="striped ">45</td>
                    <td class="striped ">0</td>
                    <td class="striped ">0.00%</td>
                    <td class="striped ">0.00</td>
                    <td class="striped ">0.00</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="300315818085" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QH WH KL TL CL RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.39" data-cpc="0.42" data-ctr="0.96" data-click="1" data-qscore="8"
                    data-wireless_qscore="8" data-max_price="0.70" data-max_mobile_price="1.33" data-g_click="44"
                    data-match="4" data-mnt="0" data-new_price="0.65" data-new_mobile_price="1.33" data-optm_type="2"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="odd down">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">1</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=高腰韩牛仔裤">
                            高腰韩牛仔裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.70</span>0.70</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.65">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.33</span><span
                            class="tag tag-gary">折</span>1.33
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.33">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="8" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">8
            </span>

                    </td>

                    <td class="striped ">104</td>
                    <td class="striped ">1</td>
                    <td class="striped ">0.96%</td>
                    <td class="striped ">0.42</td>
                    <td class="striped ">0.42</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364562" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SL OL MM YH QH WH KL TL CM RL" data-tree-code="FAV" data-roi="0.00"
                    data-g_cpc="0.76" data-cpc="0.75" data-ctr="2.74" data-click="25" data-qscore="8"
                    data-wireless_qscore="9" data-max_price="0.51" data-max_mobile_price="0.96" data-g_click="6768"
                    data-match="1" data-mnt="0" data-new_price="0.51" data-new_mobile_price="0.86" data-optm_type="2"
                    data-locked="0" data-weird-desc="5000000000" data-weird-asc="2000000000" class="even mobileDown">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">0</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=裤宽松女式牛仔长裤">
                            裤宽松女式牛仔长裤
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">


                            

                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.51</span>0.51</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.51">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">0.96</span><span
                            class="tag tag-gary">折</span>0.96
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="0.86">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="8" pc_creative_score="4" pc_rele_score="4"
                        pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">8</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">913</td>
                    <td class="striped ">25</td>
                    <td class="striped ">2.74%</td>
                    <td class="striped ">18.82</td>
                    <td class="striped ">0.75</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                <tr id="299044364565" data-adgroup_id="715202952" data-campaign_id="35560990"
                    data-label-code="SM OL MM YH QL WH KL TL CM RL" data-tree-code="CLICK" data-roi="0.00"
                    data-g_cpc="0.80" data-cpc="0.69" data-ctr="3.53" data-click="3" data-qscore="3"
                    data-wireless_qscore="9" data-max_price="0.61" data-max_mobile_price="1.15" data-g_click="4"
                    data-match="4" data-mnt="0" data-new_price="0.61" data-new_mobile_price="1.15" data-optm_type="0"
                    data-locked="0" data-weird-desc="4000000000" data-weird-asc="3000000000" class="odd">
                    <td class="check_column ">
                        <input type="checkbox">
                    </td>
                    <td class="hide  sorting_1">
                        <span class="hide main_sort">0</span>
                    </td>
                    <td class=" ">
                        <a target="_blank" class="word"
                           href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=长裤 女牛仔 秋装">
                            长裤 女牛仔 秋装
                        </a>
                        <span class="iconfont" data-toggle="tooltip" data-placement="right" data-trigger="hover"
                              title="" data-original-title="移动首屏展示机会:有机会在手机淘宝网和淘宝客户端搜索结果第一屏展示"></span>
                        <i class="iconfont del"></i>
                        <i class="iconfont match" data-original-title="" title="">

                            


                        </i>

                        <i class="iconfont chart"></i>
                    </td>
                    <td class="max_price sort_custom "><span class="hide">0.61</span>0.61</td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_price" value="0.61">
                        <i class="iconfont recovery"></i>
                    </td>
                    <td class="max_mobile_price sort_custom "><span class="hide">1.15</span><span
                            class="tag tag-gary">折</span>1.15
                    </td>
                    <td class=" ">
                        <input type="text" maxlength="5" class="w40 new_mobile_price" value="1.15">
                        <i class="iconfont recovery_mobile"></i>
                    </td>
                    <td class="sort_custom ">
                        <span class="hide">0</span>

                        <div class="rank">
                            <span class="pc_rank_desc db pct50 l">--</span>
                            <span class="hide pc_rank"></span>
                            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
                            <span class="hide mobile_rank"></span>
                        </div>
                    </td>
                    <td class="rob_rank ">

                        <a href="javascript:;" class="rob">抢</a>
                    </td>
                    <td class="qscore sort_custom " pc_qscore="3" pc_creative_score="1" pc_rele_score="4"
                        pc_cvr_score="5" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="5"
                        matchflag="4" plflag="0" data-original-title="" title="">
                        <span class="hide">0</span>
                        <span class="pc_qs db pct50 l">3</span><span class="mobile_qs left_dotted db pct50 l">9
            </span>

                    </td>

                    <td class="striped ">85</td>
                    <td class="striped ">3</td>
                    <td class="striped ">3.53%</td>
                    <td class="striped ">2.08</td>
                    <td class="striped ">0.69</td>


                    <td class=" ">0</td>


                    <td class=" ">0.00</td>


                    <td class=" ">0.00%</td>
                    <td class=" ">0.00</td>


                </tr>
                </tbody>
            </table>
        </div>


        <div id="keyword_no_data" style="display: none;">
            <h4>没有关键词数据,请到<a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=715202952">选词</a>页面添加关键词
            </h4>
        </div>
    </div>
</section>
