<?php

namespace app\assets;

use yii\web\AssetBundle;


class AmazeUIAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'plugins/AmazeUI-1.0.1/assets/css/amazeui.min.css',
    ];
    public $js = [
        'plugins/AmazeUI-1.0.1/assets/js/amazeui.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
