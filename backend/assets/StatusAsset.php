<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class StatusAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/smartadmin-production-plugins.min.css',
        'css/smartadmin-production.min.css',
        'css/smartadmin-skins.min.css',
        'css/smartadmin-rtl.min.css',//<!-- SmartAdmin RTL Support  -->
        //'ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css',
        'css/your_style.css',
        

        
    ];
    public $js = [
        
         'js/jquery-2.0.0.min.js',
         'js/app.config.js',
         'js/bootstrap/bootstrap.min.js',
         'js/notification/SmartNotification.min.js',// CUSTOM NOTIFICATION
         'js/smartwidgets/jarvis.widget.min.js',//<!-- JARVIS WIDGETS -->
         'js/plugin/sparkline/jquery.sparkline.min.js',
         'js/plugin/jquery-validate/jquery.validate.min.js',//<!-- JQUERY VALIDATE -->
         'js/plugin/masked-input/jquery.maskedinput.min.js',//<!-- JQUERY MASKED INPUT -->
         'js/plugin/select2/select2.min.js',//<!-- JQUERY SELECT2 INPUT -->
         
         'ckfinder/ckfinder.js',
         'ckeditor/ckeditor.js',
         'js/app.min.js',
         //'ckeditor/ckeditor.js'
         
         //'js/plugin/ckeditor/ckeditor.js',
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
