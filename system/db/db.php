<?php
$db = [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=uakit',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
    ],
];

return $db;