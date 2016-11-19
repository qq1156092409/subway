yii.campaign=(function($){
    var $body=$(document.body);
    $body.on("click",".campaign-toggle-trusteeship",function(e){
        var $btn = $(this);
        $.getJSON($btn.data("url"),function(response){
            if(response.status){
                var $campaign=$("#campaign-"+response.id);
                var $btn2=$campaign.find(".campaign-toggle-trusteeship");
                var $status=$campaign.find(".campaign-trusteeship-status");
                if(response.isTrusteeship){
                    $btn2.text("取消托管");
                    $status.text("自动").removeClass("label-default").addClass("label-primary");
                }else{
                    $btn2.text("开启托管");
                    $status.text("手动").removeClass("label-primary").addClass("label-default");
                }
            }else{
                alert(response.message);
            }
        });
    });
    return {};
})(jQuery);