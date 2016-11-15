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
            console.log(response);
        });
    }
    var $body=$(document.body);
    return {};
})(jQuery);