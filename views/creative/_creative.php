<?php
use yii\helpers\Url;
use app\models\Creative;
/**
 * @var $creative Creative
 */
?>
<li id="creative-<?=$creative->creative_id?>">
    <div class="item" id="">
        <div class="img">
            <img src="<?=$creative->img_url?>">
        </div>
        <div class="title"><?=$creative->title?></div>
        <div class="info">
            <strong class="item_base">点击率3.95%</strong>
            <a class="marl_6 va2 hide" href="aliim:sendmsg?uid=cntaobao&amp;siteid=cntaobao&amp;touid=cntaobao%E6%B4%BE%E7%94%9F%E8%A7%86%E8%A7%89" data-toggle="tooltip" data-placement="top" data-trigger="hover" data-original-title="该创意点击率较低，请咨询设计师优化">
                <img src="<?=Url::to("origin/images/cy_ww.gif")?>">
            </a>
            <div class="operate hover_show">
                <a href="javascript:;"><i class="iconfont ml5 modify_title"></i></a>
                <a href="javascript:;"><i class="iconfont ml5 show_chart" data-id="823332012"></i></a>

                <a href="javascript:;"><i class="iconfont ml5 delete_creative" data-id="823332012"></i></a>

            </div>
        </div>
        <div class="editor_title">
            <textarea rows="2" class="input_title"></textarea>
            <div class="tr p5 f12">
                <span class="silver l ml10">已输入<span class="j_text_len"></span>/40</span>
                <a href="javascript:;" class="save_title" data-id="823332012">保存</a>
                <a href="javascript:;" class="cancel_modify_title mr10">取消</a>
            </div>
        </div>
    </div>
</li>
