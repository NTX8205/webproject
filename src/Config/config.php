<?php

$host = "localhost";
$dbname = "webproject";
$user = "webproject";
$password = "123456";
$charset = "uf8mb4";
$attr = "mysql:host=$host;dbname=$dbname;charset=$charset";
$opts = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
