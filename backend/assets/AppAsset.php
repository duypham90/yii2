<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
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
        'css/datepicker.css',
        'css/notify.css',
        //'ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css',
        'css/your_style.css',
        'themes/upload/upload.css',

    ];
    //public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $js = [
        
         ['js/jquery.min.2.1.1.js', 'position' => \yii\web\View::POS_HEAD],
         'js/jquery-ui.min.js',
         'js/app.config.js',
         'js/bootstrap/bootstrap.min.js',
         'js/notification/SmartNotification.min.js',// CUSTOM NOTIFICATION
         'js/smartwidgets/jarvis.widget.min.js',//<!-- JARVIS WIDGETS -->
         'js/plugin/bootstrap-datepicker/bootstrap-datepicker.js',
         'js/plugin/jquery-validate/jquery.validate.min.js',//<!-- JQUERY VALIDATE -->
         'js/plugin/masked-input/jquery.maskedinput.min.js',//<!-- JQUERY MASKED INPUT -->
         'js/plugin/select2/select2.min.js',//<!-- JQUERY SELECT2 INPUT -->
         'js/plugin/jquery-form/jquery-form.min.js',
         
         'ckfinder/ckfinder.js',
         'ckeditor/ckeditor.js',
         'js/app.min.js',
         'js/notification/notify.js',
         'js/notification/prettify.js',
         'js/plugin/jquery-nestable/jquery.nestable.min.js',

         'themes/treemenu/js/category.lib.js', // tạo tree menu
         'themes/treemenu/js/app.js', //// tạo tree menu
         'themes/upload/upload.js', //// upload hình ảnh
         'ckeditor/customconfig.js',
         'js/function.js'

    ];
    //public  $jsOptions = ['position' => View::POS_HEAD];
    public $depends = [
        //'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
