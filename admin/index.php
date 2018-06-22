<?php
use yii\helpers\ArrayHelper;
use yii\web\Application;

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../system/framework/Yii.php';

$configuration = ArrayHelper::merge(
    require __DIR__ . '/conf/settings.php',
    require __DIR__ . '/../system/db/db.php'
);

Yii::setAlias('@admin', dirname(__DIR__) . '/admin');
Yii::setAlias('@ua', dirname(__DIR__) . '/system/ua');
Yii::setAlias('@identity', dirname(__DIR__) . '/system/identity');

$application = new Application($configuration);
$application->run();