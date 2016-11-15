<?php
use \app\models\Campaign;
use yii\helpers\Url;
/**
 * @var $campaign Campaign
 */
?>
<tr data-id="<?=$campaign->campaign_id?>" id="campaign-<?=$campaign->campaign_id?>" class="gray_light odd">
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
          <?php echo $campaign->campaignBudget->budget?>元
      </span>
        <i class="iconfont edit_budget" data-budget="30" data-smooth="0"></i>
    </td>
    <td class=" ">
        移动设备<br>
        计算机 <i class="iconfont edit_platform"></i>
    </td>
    <td class=" ">
        80%
        <i class="iconfont edit_schedule"></i>
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
    <td class=" "><span class="hide">0.00</span>￥0.00</td>
    <td class=" "><span class="hide">0.00</span>0.00</td>
    <td class=" ">

        <span class="b">
        已暂停
        </span>
        <a class="hover_show update_camp single" mode="1" href="javascript:;">开启</a>


    </td>
    <td class="b tc ">
        <a href="<?=Url::to(["/campaign","id"=>$campaign->campaign_id])?>">进入计划</a><br>

        <a href="javaScript:;" class="change_camp_mnt" type="1"> 开启托管 </a>

    </td>
</tr>
