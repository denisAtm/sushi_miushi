<?php
function hash_password($password){
    $salt_pre = 'sushi';
    $salt_post = 'miushi';
    return md5($salt_pre.$password.$salt_pre);
}