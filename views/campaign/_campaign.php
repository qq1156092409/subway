<?php
use \app\models\Campaign;
use yii\helpers\Url;
use app\models\multiple\DataReport;
/**
 * @var $campaign Campaign
 * @var $reports DataReport[]
 * @var $totalReport DataReport
 */
$reports = $campaign->getDataReports(7);
$totalReport=DataReport::merge($reports);
?>
<tr id="campaign-<?=$campaign->campaign_id?>" data-id="<?=$campaign->campaign_id?>" class="<?=$campaign->online_status=="offline"?"gray_light":""?>">
    <td class="check_column  sorting_1"><input type="checkbox" value="<?=$campaign->campaign_id?>"></td>
    <td class=" ">
      <span class="title">
          <a class="item_base" title="<?=$campaign->title?>" target="_blank" href="<?=Url::to(["campaign","id"=>$campaign->campaign_id])?>"><?=$campaign->title?></a>
      </span>
        <span class="label label-default mnt_desc">手动</span>
        <span class="ml10">(<?=$campaign->getAdgroups()->count()?>个宝贝)</span>
         <i class="iconfont edit_title"></i>
         <i class="iconfont show_chart"></i>
         <i class="iconfont show_subdivide"></i>

        <div class="editor_title">
            <input name="input_title" class="w230">
            <div>
                <span class="gray">已输入<span class="j_text_len"></span>/40</span>
                <div class="r">
                    <a href="javascript:;" class="save_title">保存</a>
                    <a href="javascript:;" class="cancel_modify_title">取消</a>
                </div>
            </div>
        </div>
    </td>
    <td class=" ">
      <span class="budget">
          <?php echo $campaign->campaignBudget?$campaign->campaignBudget->budgetYuan():"-"?>元
      </span>
        <i class="iconfont edit_budget" data-budget="30" data-smooth="0"></i>
    </td>
    <td class=" ">
        移动设备<br>
        计算机 <i class="iconfont edit_platform"></i>
    </td>
    <td class=" ">
        <?=$campaign->campaignSchedule?$campaign->campaignSchedule->scheduleNow():100?>%
        <i class="iconfont edit_schedule"></i>
    </td>
    <td class=" "><?=$totalReport->impression?></td>
    <td class=" "><?=$totalReport->click?></td>
    <td class=" "><?=100*$totalReport->ctr?>%</td>
    <td class=" "><?=$totalReport->costYuan()?></td>
    <td class=" "><?=$totalReport->cpcYuan()?></td>
    <td class=" "><?=$totalReport->favtotal?></td>
    <td class=" "><?=$totalReport->carttotal?></td>
    <td class=" "><?=$totalReport->paycount?></td>
    <td class=" "><?=$totalReport->coverage*100?>%</td>
    <td class=" "><?=$totalReport->payYuan()?></td>
    <td class=" "><?=$totalReport->roi?></td>
    <td class=" ">
        <span class="b"><?=$campaign->online_status=="online"?"推广中":"暂停中"?></span>
        <a class="hover_show update_camp single" href="javascript:;"><?=$campaign->online_status!="online"?"推广":"暂停"?></a>
        <?php if($campaign->settle_status=="offline"){?>
        <br><?=$campaign->settleReasonZh()?>
        <?php }?>
    </td>
    <td class="b tc ">
        <a href="<?=Url::to(["/campaign","id"=>$campaign->campaign_id])?>">进入计划</a><br>
        <a href="javaScript:;" class="change_camp_mnt" type="1"> 开启托管 </a>
    </td>
</tr>
