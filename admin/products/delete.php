<?php
require ('../../php/db.php');
$bd->query('DELETE FROM `products` WHERE `products`.`id` = "'.$_GET['id'].'";');
header('Location: /admin/products/products.php');
?>
