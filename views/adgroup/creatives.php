<?php
use yii\helpers\Url;
/**
 */
?>
<section class="container-fluid w1280 p0">
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


    <input type="hidden" id="creative_count" value="2">
    <input type="hidden" id="waiting_creatives_count" value="0">
    <input type="hidden" id="show_type" value="">
    <div id="sign-alert" class="alert alert-warning">
        <a href="http://w01.ztcjl.com/web/image_optimize/715202952/?t=list#" class="close" data-dismiss="alert">×</a>
        <strong>提示:</strong>
       <span>
           系统以24小时为单位轮换测试，并在所有创意测试完后，自动选择点击率最好的4个投放。
       </span>
    </div>
    <div class="select-days">
        <div class="dtr_picker_warp vt">
            <span class="tip" data-toggle="dtr_picker" rt_rpt="1" months="1" data-init-text="10-05&amp;emsp;至&amp;emsp;10-11" id="select_days" style="display: none;"></span><button type="button" class="comiseo-daterangepicker-triggerbutton ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-secondary comiseo-daterangepicker-bottom" id="drp_autogen0" role="button"><span class="ui-button-text">10-05 至 10-11</span><span class="ui-button-icon-secondary ui-icon ui-icon-triangle-1-s"></span></button>
        </div>
        <div id="paimei">
            <marquee behavior="slide" direction="left" onmouseover="this.stop()" onmouseout="this.start()">精灵拥有72名专业装修设计团队，提供免费店铺装修诊断</marquee>
            请联系旺旺：
            <a href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89">
                派生视觉 <img class="marl_6" src="<?=Url::to("origin/images/online.ww.gif")?>">
            </a>
        </div>
        <div class="r">

            <div class="btn-group hide" id="add_image">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    添加创意 <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">

                    <li><a href="javascript:;" id="add_new_img">添加到投放中</a></li>


                    <li><a href="javascript:;" id="add_test_img">添加到排队中</a></li>

                </ul>
            </div>

            <div class="btn-group show_model">
                <a class="btn btn-sm lst active"><i class="iconfont b" data-type="list"></i></a>
                <a class="btn btn-sm tab "><i class="iconfont b" data-type="table"></i></a>
            </div>
        </div>
    </div>
    <div class="image_optimize list ">
        <!-- 投放和排队中的创意 -->
        <div class="row-fluid">
            <div id="list_add_box">
                <hr>
                <fieldset class="mt10">
                    <span class="ml5"><strong>投放中的创意</strong></span>
                    <ul class="mt10">
                        <?php
                        if($creatives){
                            foreach($creatives as $creative){
                                echo $this->render("/creative/_creative",[
                                    "creative"=>$creative,
                                ]);
                            }
                        }
                        if(4-count($creatives)){
                            for($i=(4-count($creatives));$i>0;$i--){
                                echo $this->render("/creative/_creative_empty");
                            }
                        }
                        ?>
                    </ul>
                </fieldset>
            </div>
            <div class="mt20" id="list_add_test_box">
                <fieldset>
                    <span class="ml5"><strong>排队中的创意</strong></span>
                    <ul class="mt10">


                        <li>
                            <div class="item empty tc add_creative">
                                        <span class="empty-add">
                                            <i class="iconfont"></i><br>
                                            <span>添加测试创意</span>
                                        </span>
                            </div>
                        </li>



                        <li>
                            <div class="item empty tc add_creative">
                                        <span class="empty-add">
                                            <i class="iconfont"></i><br>
                                            <span>添加测试创意</span>
                                        </span>
                            </div>
                        </li>



                        <li>
                            <div class="item empty tc add_creative">
                                        <span class="empty-add">
                                            <i class="iconfont"></i><br>
                                            <span>添加测试创意</span>
                                        </span>
                            </div>
                        </li>



                        <li>
                            <div class="item empty tc add_creative">
                                        <span class="empty-add">
                                            <i class="iconfont"></i><br>
                                            <span>添加测试创意</span>
                                        </span>
                            </div>
                        </li>


                    </ul>
                </fieldset>
            </div>
        </div>
        <!-- 已完成的创意 -->
        <div class="row-fluid mt20" id="complete_creatives_box">
            <fieldset>
                <span class="ml5"><strong>已完成的创意</strong></span>
                <ul class="mt10">

                    <div class="tl item_base ml5 pl12">

                        您暂时没有测试创意，您可在上方“排队中的创意”区域中添加测试创意

                    </div>

                </ul>
            </fieldset>
        </div>
    </div>
    <div class="image_optimize table hidden">
        <div class="mt10">
            <header>
                <div class="box-title">
                    <strong class="title">投放中的创意</strong>
                </div>
            </header>
            <div id="table_box_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table table-bordered icon_hover_show table-hover dataTable" id="table_box">
                <thead>
                <tr role="row"><th class="w80 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="创意图片"><div>创意图片</div></th><th class="w340 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="创意标题"><div>创意标题</div></th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-sort="descending" aria-label="总花费: activate to sort column ascending"><div>总花费</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="展现量: activate to sort column ascending"><div>展现量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="点击量: activate to sort column ascending"><div>点击量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="点击率: activate to sort column ascending"><div>点击率</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="PPC: activate to sort column ascending"><div>PPC</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="成交额: activate to sort column ascending"><div>成交额</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="成交量: activate to sort column ascending"><div>成交量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="收藏量: activate to sort column ascending"><div>收藏量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="转化率: activate to sort column ascending"><div>转化率</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_box" rowspan="1" colspan="1" aria-label="ROI: activate to sort column ascending"><div>ROI</div></th><th class="w160 tc sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="操作">操作</th></tr>
                </thead>

                <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                    <td class="tc td-img img ">
                        <img src="<?=Url::to("origin/images/TB2kYf4XCkc61BjSZFCXXc_7VXa_!!0-saturn_solar.jpg_80x80.jpg")?>"  data-id="823326086">
                    </td>
                    <td class="item ">
                        <div class="hide img"><img data-url="http://img.taobaocdn.com/bao/uploaded/i3/179280293904029914/TB2kYf4XCkc61BjSZFCXXc_7VXa_!!0-saturn_solar.jpg"></div>
                        <span class="w290 title l adg_title">免邮!复古M水洗韩国SXL阔脚宽松牛仔裤</span>
                            <span class="state_opt ml10 hover_show r">
                                <i class="iconfont modify_title"></i>&nbsp;
                                <i class="iconfont show_chart" data-id="823326086"></i>&nbsp;
                            </span>
                        <div class="editor_title">
                            <input name="input_title" type="text" class="input_title w280">
                            <div>
                                <span class="gray">已输入<span class="j_text_len"></span>/40</span>
                                <div class="r">
                                    <a href="javascript:;" class="save_title" data-id="823326086">保存</a>
                                    <a href="javascript:;" class="cancel_modify_title">取消</a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class=" sorting_1">
                        <span class="hide">937.34</span>
                        <span class="cost">￥937.34</span>
                    </td>
                    <td class=" ">
                        <span class="hide">22705</span>
                        <span class="impr">22705</span>
                    </td>
                    <td class=" ">
                        <span class="hide">1325</span>
                        <span class="click">1325</span>
                    </td>
                    <td class="w80 ">
                        <span class="hide">5.84</span>
                        <span class="click_rate b">5.84%</span><br>
                        <a class="marl_6 va2 hide" href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89" data-toggle="tooltip" data-placement="top" data-trigger="hover" data-original-title="该创意点击率较低，请咨询设计师优化">
                            <img src="<?=Url::to("origin/images/cy_ww.gif")?>">
                        </a>
                    </td>
                    <td class=" ">
                        <span class="hide">0.71</span>
                        <span class="ppc">0.71</span>
                    </td>
                    <td class=" ">
                        <span class="hide">1670.80</span>
                        <span class="pay">￥1670.80</span>
                    </td>
                    <td class=" ">
                        <span class="hide">29</span>
                        <span class="paycount">29</span>
                    </td>
                    <td class=" ">
                        <span class="hide">144</span>
                        <span class="favcount">144</span>
                    </td>
                    <td class=" ">
                        <span class="hide">2.19</span>
                        <span class="conv">2.19%</span>
                    </td>
                    <td class=" ">
                        <span class="hide">1.78</span>
                        <span class="roi">1.78</span>
                    </td>
                    <td class="tc ">
                        <a href="javascript:;" class="edit_image"><strong>编辑创意</strong></a>&nbsp;&nbsp;

                        <a href="javascript:;" class="delete_image" data-id="823326086"><strong>删除</strong></a>

                    </td>
                </tr><tr class="even">
                    <td class="tc td-img img ">
                        <img src="<?=Url::to("origin/images/TB2AKzxXDoX61Bjy1zkXXc75pXa_!!0-saturn_solar.jpg_80x80.jpg")?>" data-id="823332012">
                    </td>
                    <td class="item ">
                        <div class="hide img"><img data-url="http://img.taobaocdn.com/bao/uploaded/i3/179280293904065274/TB2AKzxXDoX61Bjy1zkXXc75pXa_!!0-saturn_solar.jpg"></div>
                        <span class="w290 title l adg_title">包邮!磨白日韩水洗做旧M韩版阔脚裤牛仔裤</span>
                            <span class="state_opt ml10 hover_show r">
                                <i class="iconfont modify_title"></i>&nbsp;
                                <i class="iconfont show_chart" data-id="823332012"></i>&nbsp;
                            </span>
                        <div class="editor_title">
                            <input name="input_title" type="text" class="input_title w280">
                            <div>
                                <span class="gray">已输入<span class="j_text_len"></span>/40</span>
                                <div class="r">
                                    <a href="javascript:;" class="save_title" data-id="823332012">保存</a>
                                    <a href="javascript:;" class="cancel_modify_title">取消</a>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class=" sorting_1">
                        <span class="hide">128.95</span>
                        <span class="cost">￥128.95</span>
                    </td>
                    <td class=" ">
                        <span class="hide">4588</span>
                        <span class="impr">4588</span>
                    </td>
                    <td class=" ">
                        <span class="hide">181</span>
                        <span class="click">181</span>
                    </td>
                    <td class="w80 ">
                        <span class="hide">3.95</span>
                        <span class="click_rate b">3.95%</span><br>
                        <a class="marl_6 va2 hide" href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89" data-toggle="tooltip" data-placement="top" data-trigger="hover" data-original-title="该创意点击率较低，请咨询设计师优化">
                            <img src="<?=Url::to("origin/images/cy_ww.gif")?>">
                        </a>
                    </td>
                    <td class=" ">
                        <span class="hide">0.71</span>
                        <span class="ppc">0.71</span>
                    </td>
                    <td class=" ">
                        <span class="hide">294.00</span>
                        <span class="pay">￥294.00</span>
                    </td>
                    <td class=" ">
                        <span class="hide">5</span>
                        <span class="paycount">5</span>
                    </td>
                    <td class=" ">
                        <span class="hide">25</span>
                        <span class="favcount">25</span>
                    </td>
                    <td class=" ">
                        <span class="hide">2.76</span>
                        <span class="conv">2.76%</span>
                    </td>
                    <td class=" ">
                        <span class="hide">2.28</span>
                        <span class="roi">2.28</span>
                    </td>
                    <td class="tc ">
                        <a href="javascript:;" class="edit_image"><strong>编辑创意</strong></a>&nbsp;&nbsp;

                        <a href="javascript:;" class="delete_image" data-id="823332012"><strong>删除</strong></a>

                    </td>
                </tr></tbody></table>
        </div>
        <div class="mt20">
            <header>
                <div class="box-title">
                    <strong class="title">排队中的创意</strong>
                </div>
            </header>
            <div class="pl12 ">暂时没有排队中的创意，您可点击上方的“添加创意”按钮增加测试创意</div>
            <table class="table table-bordered icon_hover_show table-hover hide" id="table_test_box">
                <thead>
                <tr>
                    <th class="w80 tc">待测试图片</th>
                    <th class="w340 tl">待测试标题</th>
                    <th class="tl">创建时间</th>
                    <th class="w160 tc">操作</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td colspan="4" class="tc">没有数据</td>
                </tr>

                </tbody>
            </table>
        </div>
        <div class="mt20">
            <header>
                <div class="box-title">
                    <strong class="title">已完成的创意</strong>
                </div>
            </header>
            <div class="pl12 ">暂时没有已完成的测试创意，您可点击上方的“添加创意”按钮增加测试创意</div>
            <div id="table_complete_box_wrapper" class="dataTables_wrapper" role="grid"></div><table class="table table-bordered icon_hover_show table-hover hide dataTable" id="table_complete_box">
                <thead>
                <tr role="row"><th class="w80 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="创意图片"><div>创意图片</div></th><th class="w340 sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="创意标题"><div>创意标题</div></th><th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-sort="descending" aria-label="总花费: activate to sort column ascending"><div>总花费</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="展现量: activate to sort column ascending"><div>展现量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="点击量: activate to sort column ascending"><div>点击量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="点击率: activate to sort column ascending"><div>点击率</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="PPC: activate to sort column ascending"><div>PPC</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="成交额: activate to sort column ascending"><div>成交额</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="成交量: activate to sort column ascending"><div>成交量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="收藏量: activate to sort column ascending"><div>收藏量</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="转化率: activate to sort column ascending"><div>转化率</div></th><th class="sorting" role="columnheader" tabindex="0" aria-controls="table_complete_box" rowspan="1" colspan="1" aria-label="ROI: activate to sort column ascending"><div>ROI</div></th><th class="w160 tc sorting_disabled" role="columnheader" rowspan="1" colspan="1" aria-label="操作">操作</th></tr>
                </thead>

                <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd"><td valign="top" colspan="13" class="dataTables_empty">没有数据</td></tr></tbody></table>
        </div>
    </div>
</section>
