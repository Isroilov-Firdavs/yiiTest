<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);


return [
    'id' => 'app-frontend',
    // 'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/languages',
                    'fileMap' => [
                        'app'       => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
        'assetManager' => [
        'bundles' => [
            'kartik\form\ActiveFormAsset' => [
                'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
            ],
        ],
    ],
        'request' => [
            'baseUrl'=>'',
            'csrfParam' => '_csrf-frontend',
        ],
        'TestComponent' =>
        [
            'class' => 'frontend\components\TestComponent',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
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
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'baseUrl' => '',
            'scriptUrl'=>'/index.php',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        
    ],
    'modules' => [

        'gridview' => ['class' => 'kartik\grid\Module'],
        'gridview' => [
        'class' => 'kartik\grid\Module',
        // other module settings
        ]
    ],
    // 'params' => [
    //     'icon-framework' => \kartik\icons\Icon::FAS,  // Font Awesome Icon framework
    //     'bsVersion' => '4.x',
    // ],
    'params' => $params,
    'as beforeRequest' => [
        'class' => 'frontend\components\LengComponent'
    ],
    // 'params' =>
];
