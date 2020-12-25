<?php
require ('../../php/db.php');
require 'php/function.php';
session_start();
protect_page();

$name = $_POST['name'];
$price = $_POST['price'];
$parametr1 = $_POST['parametr1'];
$parametr2 = $_POST['parametr2'];
$parametr3 = $_POST['parametr3'];
$is_new = $_POST['is_new'];
$is_hit = $_POST['is_hit'];
$is_veg = $_POST['is_veg'];
$category_id = $_POST['category_id'];
$img =  $_FILES['img']['name'];
$folder =  '../../img/products/'.$category_id.'/';
move_uploaded_file($_FILES['img']['tmp_name'], $folder.$img);


$bd->query('INSERT INTO `products` (`name`, `price`, `parametr1`, `parametr2`, `parametr3`, `is_new`, `is_hit`,`is_veg`, `category_id`, `img_url`) VALUES ("'.$name.'","'.$price.'","'.$parametr1.'","'.$parametr2.'","'.$parametr3.'","'.$is_new.'","'.$is_hit.'","'.$is_veg.'","'.$category_id.'","'.$img.'")');
header('Location: /admin/products/products.php');
?>
