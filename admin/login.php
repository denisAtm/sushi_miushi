<?php
require ('../php/db.php');
require ('../php/function.php');
session_start();
$login = $_POST['login'];
$password = $_POST['password'];
$password = hash_password($password);
$a = $bd->query("SELECT `id`, `password` FROM `users` WHERE `login` = '".$login."' AND `password` = '".$password."'  LIMIT 1")->rowCount();
    if ($a == 0) {
        header('Location:index.php');
    }
    else {
        $_SESSION["userID"] = 'php_user';;
        header('Location:../admin/full_baza.php');
    }