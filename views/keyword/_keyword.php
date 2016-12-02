<?php
use app\models\Keyword;
use yii\helpers\Url;
use yii\web\View;
/**
 * @var $keyword Keyword
 */
$score=$keyword->score;
$ranking=$keyword->ranking;
?>
<tr id="keyword-<?=$keyword->keyword_id?>" data-id="<?=$keyword->keyword_id?>" class="even">
    <td class="check_column ">
        <input type="checkbox" class="keyword-check" value="<?=$keyword->keyword_id?>">
    </td>
    <td class="hide  sorting_1">
        <span class="hide main_sort">1</span>
    </td>
    <td class=" ">
        <a target="_blank" class="word" href="http://subway.simba.taobao.com/#!/tools/insight/queryresult?kws=<?=$keyword->word?>">
            <?=$keyword->word?>
        </a>
        <span class="iconfont"></span>
        <i class="iconfont del"></i>
        <i class="iconfont match" data-original-title="" title="">
        </i>
        <i class="iconfont chart"></i>
    </td>
    <td class="max_price sort_custom "><?=$maxPriceYuan=$keyword->maxPriceYuan()?></td>
    <td class=" ">
        <input type="text" maxlength="5" class="w40 new_price keyword-price-pc-new" value="<?=$maxPriceYuan?>">
        <i class="iconfont recovery keyword-price-pc-recovery"></i>
    </td>
    <td class="max_mobile_price sort_custom ">
        <?php if($keyword->mobile_is_default_price){?>
            <span class="tag tag-gary">折</span>
        <?php } ?>
        <span class="max_mobile_price_value"><?=$mobileMaxPriceYuan=$keyword->mobileMaxPriceYuan()?></span>
    </td>
    <td class=" ">
        <input type="text" maxlength="5" class="w40 new_mobile_price keyword-price-mobile-new" value="<?=$mobileMaxPriceYuan?>">
        <i class="iconfont recovery_mobile keyword-price-mobile-recovery"></i>
    </td>
    <td class="sort_custom ">
        <span class="hide">0</span>
        <div class="rank">
            <span class="pc_rank_desc db pct50 l"><?=$ranking?$ranking->pc_rank:"-"?></span>
            <span class="hide pc_rank"></span>
            <span class="left_dotted db pct50 l mobile_rank_desc"><?=$ranking?$ranking->mobile_rank:"-"?></span>
            <span class="hide mobile_rank"></span>
        </div>
    </td>
    <td class="rob_rank ">
        <a href="javascript:;" class="rob">抢</a>
    </td>
    <td class="qscore sort_custom " data-original-title="" title="">
        <span class="pc_qs db pct50 l"><?=$score?$score->qscore:"-"?></span>
        <span class="mobile_qs left_dotted db pct50 l"><?=$score?$score->wireless_qscore:"-"?></span>
    </td>
    <td class="striped ">-</td>
    <td class="striped ">-</td>
    <td class="striped ">-</td>
    <td class="striped ">-</td>
    <td class="striped ">-</td>
    <td class=" ">-</td>
    <td class=" ">-</td>
    <td class=" ">-</td>
    <td class="red ">-</td>
</tr>
