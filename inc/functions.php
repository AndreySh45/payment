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
    setPaymentData($order_id);
    header('Location: pages/form.php');
    die;
}

function setPaymentData($order_id){
    if(isset($_SESSION['payment'])) unset($_SESSION['payment']);
    $_SESSION['payment']['id'] = $order_id;
    $_SESSION['payment']['price'] = $_POST['price'];
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
