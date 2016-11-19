<?php
use yii\helpers\Url;
use app\models\Adgroup;
/**
 * @var $adgroup Adgroup
 */
?>
<tr id="adgroup-<?=$adgroup->adgroup_id?>" class="adg_tr adgroup-model" data-id="<?=$adgroup->adgroup_id?>">
    <td class="check_column vm "><input type="checkbox" class="kid_check adgroup-check" value="<?=$adgroup->adgroup_id?>"></td>
    <td class="td-img ">
        <a class="item_base" target="_blank" href="http://item.taobao.com/item.htm?id=539103908109">
            <img width="70" height="70" src="./campaign_files/TB2rygzab2B11BjSsplXXcMDVXa_!!409358473.jpg_70x70.jpg">
        </a>
    </td>
    <td class="item_dark ">
        <span class="title w280">
            <a id="adgroup-<?=$adgroup->adgroup_id?>" class="item_base to_optimize" target="_blank" href="<?=Url::to(["/adgroup","id"=>$adgroup->adgroup_id])?>"><?=$adgroup->item?$adgroup->item->title:"-"?></a>
            &nbsp;￥<span class="item_price"><?=$adgroup->item?$adgroup->item->price:"-"?></span>
            <span class="badge r count-cr hide mt5">0</span>
            <span class="badge r count-kw hide mt5 mr5">0</span>
            <span class="state_opt r mr10">
                <i class="iconfont mr5 show_chart hover_show"></i>
                <i class="iconfont show_subdivide hover_show"></i>&nbsp;&nbsp;
                <i class="iconfont set_follow_status hover_show" data-toggle="tooltip" data-placement="top" title="" value="0" data-original-title="点击可设置为关注宝贝"></i>
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
        限价：<span class="limit_price pr5" data-toggle="tooltip" title="" data-original-title="PC端限价">0.00</span><span class="mobile_limit_price left_dotted pl5" data-toggle="tooltip" title="" data-original-title="移动端限价">0.00</span></span>
        <span class="optm_submit_time "><br>目前尚未优化过</span>

    </td>
    <td class="w90 opt_url ">
        <div class="dropdown">
            <a class="dropdown-toggle to_optimize" href="javascript:;" adgroup_id="715202952">
                <span class="dropdown-value"><strong>进入宝贝</strong></span> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li class="mnt_type_true "><a href="http://w01.ztcjl.com/web/smart_optimize/715202952" target="_blank">智能优化</a></li>
                <li class="mnt_type_true "><a href="http://w01.ztcjl.com/web/bulk_optimize/715202952" target="_blank">批量优化</a></li>
                <li class="mnt_type_false hide "><a href="http://w01.ztcjl.com/mnt/adgroup_data/715202952" target="_blank">托管详情</a></li>
                <li><a href="http://w01.ztcjl.com/web/select_keyword/quick?adgroup_id=715202952" target="_blank">快速选词</a></li>
                <li><a href="http://w01.ztcjl.com/web/select_keyword/precise?adgroup_id=715202952" target="_blank">精准淘词</a></li>
                <li><a href="http://w01.ztcjl.com/web/title_optimize/?adgroup_id=715202952" target="_blank">标题优化</a></li>
                <li><a href="http://w01.ztcjl.com/web/image_optimize/715202952?t=list" target="_blank">创意优化</a></li>
            </ul>
        </div>

        <a href="javascript:;" class="onekey" adgroup_id="715202952" campaign_id="35560990">
            <span class="dropdown-value"><strong>一键优化</strong></span>
        </a>

    </td>
</tr>
