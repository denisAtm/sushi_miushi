<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');

$name = $_POST['name'];
$text = $_POST['text'];
$img =  $_FILES['img']['name'];
$folder =  '../../img/banner/';
move_uploaded_file($_FILES['img']['tmp_name'], $folder.$img);


$bd->query('INSERT INTO `banner` (`title`, `subtitle`,`img`) VALUES ("'.$name.'","'.$text.'","'.$img.'")');
header('Location: /admin/banner/banner.php');
?>
