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
        }else{
            $count.text(parseInt($count.text())-1);
        }
    });
    return {};
})(jQuery);