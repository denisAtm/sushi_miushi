<?php
require ('../../php/db.php');
$bd->query('DELETE FROM `categories` WHERE `categories`.`id` = "'.$_GET['id'].'";');
header('Location: /admin/category/category.php');
?>
