<?php
require ('../../php/db.php');

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
$folder =  '../../img/set/';
$folder1 =  '../../img/pizza/';
$folder2 =  '../../img/roll/';
$folder3 =  '../../img/wok/';
if ($_POST['category_id'] == '1') {
    move_uploaded_file($_FILES['img']['tmp_name'], $folder.$img);
}elseif ($_POST['category_id'] == '2'){
    move_uploaded_file($_FILES['img']['tmp_name'], $folder1.$img);
}if ($_POST['category_id'] == '3'){
    move_uploaded_file($_FILES['img']['tmp_name'], $folder2.$img);
}elseif ($_POST['category_id'] =='4'){
    move_uploaded_file($_FILES['img']['tmp_name'], $folder3.$img);
}

$bd->query('INSERT INTO `products` (`name`, `price`, `parametr1`, `parametr2`, `parametr3`, `is_new`, `is_hit`,`is_veg`, `category_id`, `img_url`) VALUES ("'.$name.'","'.$price.'","'.$parametr1.'","'.$parametr2.'","'.$parametr3.'","'.$is_new.'","'.$is_hit.'","'.$is_veg.'","'.$category_id.'","'.$img.'")');
header('Location: /admin/products/products.php');
?>
