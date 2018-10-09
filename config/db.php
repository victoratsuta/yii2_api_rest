<?php

$host = 'localhost';
$dbname = 'yii2rest';

return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host={$host};dbname={$dbname}",
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];