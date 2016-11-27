<?php
use yii\helpers\Url;
use app\models\Adgroup;
use app\models\multiple\DataReport;
/**
 * @var $adgroup Adgroup
 */
$report=DataReport::merge($adgroup->getDataReport(7));
?>
<tr id="adgroup-<?=$adgroup->adgroup_id?>" class="adg_tr adgroup-model" data-id="<?=$adgroup->adgroup_id?>">
    <td class="check_column vm "><input type="checkbox" class="kid_check adgroup-check" value="<?=$adgroup->adgroup_id?>"></td>
    <td class="td-img ">
        <a class="item_base" target="_blank" href="http://item.taobao.com/item.htm?id=<?=$adgroup->num_iid?>">
            <img width="70" height="70" src="<?=$adgroup->img_url?>">
        </a>
    </td>
    <td class="item_dark ">
        <?php if($adgroup->item){?>
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
        <?php }else{ ?>
            <span>未找到对于宝贝</span>
        <?php } ?>
    </td>
    <td class=""><?=$report->impression?></td>
    <td class=""><?=$report->click?></td>
    <td class=""><?=100*$report->ctr?>%</td>
    <td class="">￥<?=$report->costYuan()?></td>
    <td class="">￥<?=$report->cpcYuan()?></td>
    <td class=""><?=$report->favtotal?></td>
    <td class=""><?=$report->carttotal?></td>
    <td class=""><?=$report->paycount?></td>
    <td class=""><?=100*$report->coverage?>%</td>
    <td class="sorting_1">￥<?=$report->payYuan()?></td>
    <td class=""><?=$report->roi?></td>
    <td class="vt w120 ">
        <span class="lbl_online"><?=$adgroup->online_status=="online"?"推广中":"暂停中"?>&nbsp;&nbsp;</span>
        <a href="javascript:;" class="hover_show switch_status"><?=$adgroup->online_status!="online"?"推广":"暂停"?></a>
        <a href="javascript:;" class="hover_show del_good">删除</a>
        <?php if($adgroup->offline_type!="online"){ ?>
        <br> <span class="lbl_online"><?=$adgroup->offlineTypeZh()?></span>
        <?php } ?>
        <br>
        移动折扣： <span class="adg_mobdiscount" campaign_id="35560990"><?=$adgroup->mobile_discount?>% </span>
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
                <li class="mnt_type_true "><a href="<?=Url::to(["/adgroup/smart","id"=>$adgroup->adgroup_id])?>" target="_blank">智能优化</a></li>
                <li class="mnt_type_true "><a href="<?=Url::to(["/adgroup/bulk","id"=>$adgroup->adgroup_id])?>" target="_blank">批量优化</a></li>
                <li><a href="<?=Url::to(["/adgroup/keyword-select","id"=>$adgroup->adgroup_id])?>" target="_blank">快速选词</a></li>
                <li><a href="<?=Url::to(["/adgroup/keyword-select","id"=>$adgroup->adgroup_id])?>" target="_blank">精准淘词</a></li>
                <li><a href="<?=Url::to(["/adgroup/item-title","id"=>$adgroup->adgroup_id])?>" target="_blank">标题优化</a></li>
                <li><a href="<?=Url::to(["/adgroup/creatives","id"=>$adgroup->adgroup_id])?>" target="_blank">创意优化</a></li>
            </ul>
        </div>

        <a href="javascript:;" class="onekey">
            <span class="dropdown-value"><strong>一键优化</strong></span>
        </a>

    </td>
</tr>
