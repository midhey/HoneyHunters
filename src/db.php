<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'test';

$db_connect = new mysqli($host, $username, $password, $database);

if ($db_connect->connect_error) {
    die("Ошибка подключения: " . $db_connect->connect_error);
}
?>
