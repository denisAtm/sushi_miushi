<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
$bd->query('DELETE FROM `categories` WHERE `categories`.`id` = "'.$_GET['id'].'";');
header('Location: /admin/category/category.php');
?>
