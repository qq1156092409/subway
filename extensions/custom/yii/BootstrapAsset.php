<?php

namespace app\extensions\custom\yii;

use yii\bootstrap\BootstrapPluginAsset;

/**
 * 只需要Bootstrap 的js文件
 * Class BootstrapAsset
 * @package app\extensions\custom\yii
 */
class BootstrapAsset extends BootstrapPluginAsset
{
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}