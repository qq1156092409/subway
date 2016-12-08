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
    $body.on("change",".campaign-check-all",function(e){
        if($(this).is(":checked")){
            $(".campaign-check").prop("checked",true);
        }else{
            $(".campaign-check").prop("checked",false);
        }
    });
    $body.on("click",".campaign-batch-status",function(e){
        var $btn=$(this);
        var data={ ids: []};
        var $checks=$(".campaign-check:checked");
        if($checks.size()==0) return;
        $checks.each(function(){
            data.ids.push($(this).val());
        });
        data.online_status=$btn.data("status");
        $.post($btn.data("url"),data,function(response){
            if(response.result==1){
                $.each(response.data.campaigns,function(k,v){
                    var $campaign=$("#campaign-"+ v.campaign_id);
                    render($campaign,v);
                });
                $checks.prop("checked",false);
                $(".campaign-check-all").prop("checked",false);
            }else{
                alert(response.message);
            }
        });
    });
    $body.on("click",".campaign-toggle-status",function(e){
        var $btn=$(this);
        $.getJSON($btn.data("url"),function(response){
            if(response.result==1){
                var data=response.data;
                var $campaign=$("#campaign-"+data.campaign_id);
                render($campaign,data);
            }else{
                alert(response.message);
            }
        });
    });
    function render($campaign,data){
        var $btn=$campaign.find(".campaign-toggle-status");
        if(data.online_status=="offline"){
            $campaign.addClass("gray_light");
            $btn.text("推广");
            $btn.prev().text("暂停中");
        }else{
            $campaign.removeClass("gray_light");
            $btn.text("暂停");
            $btn.prev().text("推广中");
        }
    }
    return {};
})(jQuery);