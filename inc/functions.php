<?php

session_start();

$data = [
    'name' => '',
    'email' => '',
    'product' => '',
    'price' => '',
];

function debug($data){
    echo '<pre>'. print_r($data, 1).'</pre>';
}

if(!empty($_POST)){
    require_once 'db.php';
    $data = load($data);
    //debug($data);
    $order_id = save('orders', $data);
    //var_dump($order_id);
}

function load($data){
    foreach($_POST as $k => $v){
        if(array_key_exists($k, $data)){ //Проверяет, присутствует ли в массиве $_POST указанный ключ 
            $data[$k] = $v;
        }
    }
    return $data;
}

function save($table, $data){// Запись заказа в БД payment
    $tbl = R::dispense($table);
    foreach($data as $k => $v){
        $tbl->$k = $v;
    }
    return R::store($tbl);
}
