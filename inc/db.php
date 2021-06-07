<?php

require_once 'rb.php'; //Подключение ORM RedBeanPHP

$db = [
    'dsn' => 'mysql:host=localhost;dbname=payment;charset=utf8',
    'user' => 'root',
    'pass' => 'root',
];

R::setup($db['dsn'], $db['user'], $db['pass']);
R::freeze(true);