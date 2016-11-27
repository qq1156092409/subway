<?php
use app\models\Keyword;
use yii\helpers\Url;
use yii\web\View;
/**
 * @var $keyword Keyword
 */
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
            <span class="pc_rank_desc db pct50 l">--</span>
            <span class="hide pc_rank"></span>
            <span class="left_dotted db pct50 l mobile_rank_desc">--</span>
            <span class="hide mobile_rank"></span>
        </div>
    </td>
    <td class="rob_rank ">
        <a href="javascript:;" class="rob">抢</a>
    </td>
    <td class="qscore sort_custom " pc_qscore="7" pc_creative_score="3" pc_rele_score="4" pc_cvr_score="4" yd_qscore="9" yd_creative_score="4" yd_rele_score="4" yd_cvr_score="4" matchflag="4" plflag="0" data-original-title="" title="">
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
