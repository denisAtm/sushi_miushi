<?php
function hash_password($password){
    $salt_pre = 'sushi';
    $salt_post = 'miushi';
    return md5($salt_pre.$password.$salt_pre);
}
function logged_in(){
    return($_SESSION["userID"] == 1) ? true : false;
}
function protect_page(){
    if (logged_in() === false ) {
        header('Location: /admin/index.php');
    }
}
