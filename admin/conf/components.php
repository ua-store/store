<?php
$components = [
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'request' => [
        'csrfParam' => '_csrf-backend',
        'cookieValidationKey' => 'htIQ5g0c7uJxe2I0F_Tz-g4ssviF6ER8',
        'baseUrl' => '/admin'
    ],
    'session' => [
        'name' => 'backend-session'
    ],
    'urlManager' => [
        'class' => 'yii\web\UrlManager',
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => []
    ],
];
return $components;