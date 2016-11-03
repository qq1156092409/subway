yii.store=(function($){
    var $chart=$("#account_char");
    //var option= $.parseJSON($chart.find(".data").html());
    console.log(option);
    echarts.init($chart[0]).setOption(option);

    var $body=$(document.body);
    return {};
})(jQuery);