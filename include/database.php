<?php

$link = mysqli_connect('localhost', 'root', '', 'test');
if (mysqli_connect_errno()) {
    echo 'Ошибка подключения к БД (' . mysqli_connect_errno() . '(:' . mysqli_connect_error();
    exit();
}


// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'test');

// $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if ($mysql->connect_errno) exit('Ошибка подключения к БД');
// $mysql->set_charset('utf8');
// $mysql->close();
