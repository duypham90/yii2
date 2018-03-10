<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/lib/bootstrap.min.css',
        'css/lib/font-awesome.min.css',
        'css/style.css',
    ];
    public $js = [
        //'js/jquery-1.11.3.min.js'
        'js/function.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
