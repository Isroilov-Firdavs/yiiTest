<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-restapi',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'restapi\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'baseUrl'=>'/api',
            'csrfParam' => '_csrf-restapi',
                'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
        ],
        'user' => [
			'class' => 'yii\web\User',
			'identityClass' => 'andrewdanilov\adminpanel\models\User',
			'accessChecker' => 'andrewdanilov\adminpanel\AccessChecker',
			'enableAutoLogin' => true,
            'enableSession' => false,
            'loginUrl' => null,
			'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
			'loginUrl' => ['user/login'],
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
        'urlManager' => [
        'enablePrettyUrl' => true,
        'enableStrictParsing' => true,
        'showScriptName' => false,
        'rules' => [
            [
                'class' => 'yii\rest\UrlRule',
                'controller' =>
                    [
                        'user',
                        'guruh',
                    ],
            ],
        ],
    ],

    ],
    'params' => $params,
];
