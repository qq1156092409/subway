yii.store=(function($){
    //init
    var $mainPage=$("#main-page");
    if($mainPage.data("page")=="store-index"){
        //chart
        var $chart=$("#account_char");
        //var option= $.parseJSON($chart.find(".data").html());
        echarts.init($chart[0]).setOption(option);
        //refresh
        var url=$mainPage.data("refresh-url");
        $.getJSON(url,function(response){
            $(".balance-yuan").text(response.balance.balanceYuan);
        });
    }

    var $body=$(document.body);

    $body.on("click",".store-refresh",function(e){
        var $btn=$(this);
        if($btn.data("status")=="running"){
            return;
        }
        $btn.data("status","running");
        $.getJSON($btn.data("url"),function(response){
            if(response.result==1){
                location.reload();
            }else{
                alert(response.message);
            }
            $btn.data("status","wait");
        });
    });
    return {};
})(jQuery);