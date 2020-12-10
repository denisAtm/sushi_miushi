<?php

$dsn = 'mysql:host=localhost;dbname=sushi';
$user = 'root';
$pass = 'root';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

$bd = new PDO($dsn, $user, $pass ,$option);

