<?php
require 'php/function.php';
protect_page();
session_start();
require ('../../php/db.php');
$text = $_POST['genre'];
    $bd->query('INSERT INTO `categories` (`name`) VALUES ("'.$text.'")');
    header('Location: /admin/category/category.php');