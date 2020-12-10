<?php
require ('../php/db.php');
require ('../php/function.php');
$login = ($_POST['login']);

$password = ($_POST['password']);
$password = hash_password($password);

$sql = $bd->query("INSERT INTO `users` (`login`, `password`) VALUES ('".$login."', '".$password."')");
header( 'Location: index.php')
?>