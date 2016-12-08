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
    $body.on("click","#adgroup-refresh-rankings",function(e){
        var $btn=$(this);
        $.getJSON($btn.data("url"),function(response){
            if(response.result==1){
                var rankings=response.data.rankings;
                $.each(rankings,function(k,v){
                    var $keyword=$("#keyword-"+ v.bidwordid);
                    $keyword.find(".pc_rank_desc").text(v.pc_rank);
                    $keyword.find(".mobile_rank_desc").text(v.mobile_rank);
                });
            }else{
                alert(response.message);
            }
        });
    });
    $body.on("change",".keyword-check-all",function(e){
        var $check=$(this);
        if($check.is(":checked")){
            $(".keyword-check").prop("checked",true);
        }else{
            $(".keyword-check").prop("checked",false);
        }
    });
    $body.on("change",".keyword-check",function(e){
        var $check=$(this);
        if($check.is(":checked")){
            $(".keyword-check").prop("checked",true);
            if($(".keyword-check:not(:checked)").size()==0){
                $(".keyword-check-all").prop("checked",true);
            }
        }else{
            $(".keyword-check-all").prop("checked",false);
        }
    });

    return {};
})(jQuery);