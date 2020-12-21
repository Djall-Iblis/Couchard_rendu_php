<?php

$dbconfig = [
    "host" => "mysql:host=localhost:3306;dbname=shaco_db",
    "login" => "root",
    "pass" => "Admin",
    "options" => array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ),
];
