yii.keyword=(function($){
    var $body=$(document.body);
    $body.on("click",".keyword-price-pc-reset-all",function(e){
        var $prices=$(".price-pc-new");
        $prices.each(function(){
            var $price=$(this);

        });
    });
    $body.on("blur",".keyword-price-pc-new",function(e){
        var $input=$(this);
        var $keyword=$input.parent().parent();
        var before=$input.parent().prev().text();
        var after=$input.val();
        if(before>after){
            $keyword.removeClass("up").addClass("down");
        }else if(before<after){
            $keyword.removeClass("down").addClass("up");
        }
    });
    $body.on("blur",".keyword-price-mobile-new",function(e){
        var $input=$(this);
        var $keyword=$input.parent().parent();
        var before=$input.parent().prev().find(".max_mobile_price_value").text();
        var after=$input.val();
        if(before>after){
            $keyword.removeClass("mobileUp").addClass("mobileDown");
        }else if(before<after){
            $keyword.removeClass("mobileDown").addClass("mobileUp");
        }
    });
    $body.on("click",".keyword-price-pc-recovery",function(e){
        var $keyword=$(this).parent().parent();
        var $before=$(this).parent().prev();
        var $after=$(this).prev();
        $keyword.removeClass("up").removeClass("down");
        $after.val($before.text());
    });
    $body.on("click",".keyword-price-mobile-recovery",function(e){
        var $keyword=$(this).parent().parent();
        var $before=$(this).parent().prev().find(".max_mobile_price_value");
        var $after=$(this).prev();
        $keyword.removeClass("mobileUp").removeClass("mobileDown");
        $after.val($before.text());
    });
    $body.on("change",".keyword-check-all",function(e){
        var $check=$(this);
        if($check.is(":checked")){
            $(".keyword-check").prop("checked",true);
        }else{
            $(".keyword-check").prop("checked",false);
        }
    });

    return {};
})(jQuery);