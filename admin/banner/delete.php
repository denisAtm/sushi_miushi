<?php
require 'php/function.php';
session_start();
protect_page();
require ('../../php/db.php');
$bd->query('DELETE FROM `banner` WHERE `banner`.`id` = "'.$_GET['id'].'";');
header('Location: /admin/banner/banner.php');
?>
