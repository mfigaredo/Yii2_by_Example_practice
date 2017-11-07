<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    
    'timeZone' => 'GMT',
    
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'k3ACYJLsklv1F0LmayxQqZ53V4fMrlCj',
        ],
        
       
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false, 
            
            
            'rules' => [
            
               '<category:\w+>' => 'categories/detail',
           //     '<alias:\w+>' => 'site/<alias>',
				'test-rules/<year:\d{4}>/items-list' => 'test-rules/items-list',
				[ 
					'pattern' => 'test-rules/<category:\w+>/items-list',
					'route' => 'test-rules/items-list',
					'defaults' => ['category' => 'shopping']
				],
				[
					'pattern' => '<lang:\w+>/<controller>/<action>',
					'route' => '<controller>/<action>',
				],						
				[
					'class' => 'app\components\TestUrlRule', 
					// ...configure other properties...
				],
				// 'site/captcha/<refresh:\d+>' => 'site/captcha',
    //             'site/captcha/<v:\w+>' => 'site/captcha',   
            ],
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
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
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
        'db' => require(__DIR__ . '/db.php'),
        
        'dbSqlite' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:'.__DIR__.'/../web/db.sqlite',
        ],        
        /*
        'formatter' => [
            'dateFormat' => 'dd/MM/yyyy',
            'decimalSeparator' => '.',
            'thousandSeparator' => ',',
            'currencyCode' => 'EUR',
       ],
       */
      'user' => [
        'identityClass' => 'app\models\User',
      ],

    ],
    'params' => $params,
    
    'aliases' => 
    [
        '@uploadedfilesdir' => '@app/uploadedfiles'
    ],
    
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
   # $config['bootstrap'][] = 'debug';
    //$config['modules']['debug'] = 'yii\debug\Module';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.178.20', '*'] // adjust this to your needs
    ];   
    
    $config['bootstrap'][] = 'gii';
    //$config['modules']['gii'] = 'yii\gii\Module';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.178.20', '*'] // adjust this to your needs
    ];    
}

return $config;
