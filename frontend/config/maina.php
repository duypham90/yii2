<?php
use \yii\web\Request;
$baseUrl = str_replace('/frontend/web', '', (new Request)->getBaseUrl());

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/params.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        ],
        // 'assetManager' => [
        //     'appendTimestamp' => true,
        // ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],      
        'urlManager' => [
            'baseUrl' => $baseUrl,
            'class' => 'yii\web\UrlManager',
            'showScriptName' => false,
            'enablePrettyUrl' => true,      
            'enableStrictParsing' => false,
            //'suffix' => '.html',
            'normalizer'=>[
                'class' => 'yii\web\UrlNormalizer',
                'collapseSlashes' => true,
                'normalizeTrailingSlash' => true,
                //'action' => yii\web\UrlNormalizer::ACTION_REDIRECT_TEMPORARY,
            ],
            'rules' => [
                '/admin' => 'admin/site/login',
                'GET <alias:index|about|contact>' => 'site/<alias>',
                'cart' => 'cart/index',
                'product' => 'product/index',
                'cart/remove/<id:\d+>' => 'cart/remove',
                'checkout' => 'checkout/index',
                'cart/<id:\d+>' => 'cart/addcart',
                'addcart' => 'cart/addcart',
                'POST ajax/<action>' => 'cart/<action>',


                '<action:(.*)>' => 'site/<action>',
                '<cate:\w+>/<pro:\w+>-<id:\d>' => 'product/detail',
                '<cate:\w+>' => 'product/index',              
                
               

            ],
        ],      
    ],
    'defaultRoute' => 'site/index',
    'params' => $params,
];
