<?php
// use \yii\web\Request;
// $baseUrl=str_replace('/api/web','/api',(new Request)->getBaseUrl());

$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-api',
   // 'name'=>$baseUrl,
    'basePath' => dirname(__DIR__),    
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'api\modules\v1\Module'
        ]
    ],   
    'components' => [ 
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        // 'response' => [
        //     'format' => yii\web\Response::FORMAT_JSON,
        //     'charset' => 'UTF-8',
        // ],       
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
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
        'urlManager' => [
        	//'baseUrl'=>$baseUrl,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'v1/hotel',
                    'extraPatterns' => [
                        'GET listhotel' => 'listhotel',
                        'GET search' => 'search',
                    ],
                    // 'tokens' => [
                    //     '{id}' => '<id:\\w+>'
                    // ]
                    
                ],
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => 'v1/user',
                    'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]
                    
                ],
            ],        
        ]
    ],
    'params' => $params,
];



