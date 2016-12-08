yii.campaign=(function($){
    var $body=$(document.body);

    $body.on("change",".adgroup-check-all",function(e){
        var $checkbox=$(this);
        var $count=$(".adgroup-check-count");
        var $adgroupChecks=$(".adgroup-check");
        var $checkAlls=$(".adgroup-check-all");
        if($checkbox.is(":checked")){
            $adgroupChecks.prop("checked",true);
            $checkAlls.prop("checked",true);
            $count.text($adgroupChecks.size());
        }else{
            $adgroupChecks.prop("checked",false);
            $checkAlls.prop("checked",false);
            $count.text(0);
        }
    });
    $body.on("change",".adgroup-check",function(e){
        var $checkbox=$(this);
        var $count=$(".adgroup-check-count");
        if($checkbox.is(":checked")){
            $count.text(parseInt($count.text())+1);
            if($(".adgroup-check:not(:checked)").size()==0){
                $(".adgroup-check-all").prop("checked",true);
            }
        }else{
            $count.text(parseInt($count.text())-1);
            $(".adgroup-check-all").prop("checked",false);
        }
    });
    $body.on("click","#select_keyword_nav a",function(e){
        var $btn=$(this);
        $btn.parent().addClass("active").siblings(".active").removeClass("active");
        $("#"+$btn.data("id")).addClass("active").siblings(".active").removeClass("active");
    });
    $body.on("click",".adgroup-refresh",function(e){
        var $btn=$(this);
        $.getJSON($btn.data("url"),function(response){
            if(response.result==1){
                location.reload();
            }else{
                alert(response.message);
            }
        });
    });
    return {};
})(jQuery);