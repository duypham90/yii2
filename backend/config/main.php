<?php
use \yii\web\Request;
$baseUrl=str_replace('/backend/web','/admin',(new Request)->getBaseUrl());

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
   // require(__DIR__ . '/params-local.php')
);
//require_once(__DIR__ . '/../../common/config/aliases.php');
return [
    'id' => 'appbackend',
    'name'=>$baseUrl,
    'basePath' => dirname(__DIR__),   
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',
    'defaultRoute' => 'site/login',
    //'defaultRoute' => 'default/index',
    'modules' => [],
    'components' => [
        
        'user' => [
            'identityClass' => 'common\models\Admin',
            'enableAutoLogin' => true,
            'loginUrl' => ['site/login'],
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'dateFormat' => 'dd-mm-yyyy',
            'decimalSeparator' => ',',
            'thousandSeparator' => ',',
            'currencyCode' => 'VND',
            //'nullDisplay' => '-',// default not set in gridview   if database set this column is null         
        ],
        // 'assetManager' => [
        //     'bundles' => [
        //         'yii\web\JqueryAsset' => [
        //             'sourcePath' => null,   // do not publish the bundle
        //         ],
        //     ],
        // ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'baseUrl' => $baseUrl,
            'cookieValidationKey' => 'zxcvbn,./asdfghjkl;qwertyuiop[w',
            'csrfParam' => '_backendCSRF',
        ],
        'assetManager' => [
            'appendTimestamp' => true,
        ],
        'urlManager' => [
            'baseUrl'=>$baseUrl,
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'enableStrictParsing' => true,
            // 'normalizer'=>[
            //     'class' => 'yii\web\UrlNormalizer',
            //     'collapseSlashes' => true,
            //     'normalizeTrailingSlash' => true,
            // ],
            'rules' => [
                'admin' => 'admin/site/login',
                // '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                // '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                // '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ],
        ],               
    ],
    'params' => $params,

];
