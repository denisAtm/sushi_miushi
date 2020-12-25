<?php

function getCart() {
    return json_decode($_COOKIE['cart'] ?? '[]', true);
}

function saveCart($cart) {
    setcookie('cart', json_encode($cart), time() + 60 * 60 * 60 * 60);
}

function addToCart($id, $count = 1) {
    $cart = getCart();
    $value = $cart[$id] ?? 0;
    $value += $count;
    $cart[$id] = $value;
    saveCart($cart);
}

function deleteProduct($id, $count = 1){
    $cart = getCart();
    $value = $cart[$id] ?? 0;
    $value -= $count;
    if ($value > 0){
        $cart[$id] = $value;
    } else{
        unset($cart[$id]);
    }
    saveCart($cart);
}
