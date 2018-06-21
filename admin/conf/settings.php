<?php
$components = require __DIR__ . '/components.php';

$config = [
    'id' => 'store-backend',
    'language' => 'ru-RU',
    'timeZone' => 'Europe/Kiev',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'admin\controllers',
    'bootstrap' => ['log'],
    'components' => $components,
];

$config['bootstrap'][] = 'debug';
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    'allowedIPs' => ['127.0.0.1',  '109.87.26.144', '134.249.136.215']
];

return $config;