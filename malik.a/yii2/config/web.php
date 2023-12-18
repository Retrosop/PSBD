<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => '<span class="animated-text">МЕБ</span><span class="animated-text">АРИЯ</span>',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '_5UMiGimLD-Y8e53mGxdTT0kxBSE8Aum',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
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
        'db' => $db,
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
				// Мебельные изделия
				'furniture' => 'furniture/index',
				'furniture/<id:\d+>' => 'furniture/view',
				'furniture/create' => 'furniture/create',
				'furniture/update/<id:\d+>' => 'furniture/update',
				'furniture/delete/<id:\d+>' => 'furniture/delete',

				// Категории
				'categories' => 'category/index',
				'categories/<id:\d+>' => 'category/view',
				'categories/create' => 'category/create',
				'categories/update/<id:\d+>' => 'category/update',
				'categories/delete/<id:\d+>' => 'category/delete',

				// Заказы
				'orders' => 'order/index',
				'orders/<id:\d+>' => 'order/view',
				'orders/create' => 'order/create',
				'orders/update/<id:\d+>' => 'order/update',
				'orders/delete/<id:\d+>' => 'order/delete',

				// Элементы заказа
				'order-items' => 'order-item/index',
				'order-items/<id:\d+>' => 'order-item/view',
				'order-items/create' => 'order-item/create',
				'order-items/update/<id:\d+>' => 'order-item/update',
				'order-items/delete/<id:\d+>' => 'order-item/delete',
				'catalog' => 'furniture/catalog',
			],
        ],
		
		'i18n' => [
			'translations' => [
				'app*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => '@app/messages',
					'sourceLanguage' => 'en-US', // Язык, на котором написаны оригинальные строки
					'fileMap' => [
						'app' => 'app.php',
					],
				],
			],
		],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
