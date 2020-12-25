<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
$bd->query('DELETE FROM `products` WHERE `products`.`id` = "'.$_GET['id'].'";');
header('Location: /admin/products/products.php');
?>
