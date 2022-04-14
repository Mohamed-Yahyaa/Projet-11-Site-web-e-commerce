<?php
include 'cartManager.php';
session_start();

$cartManager = new CartManager();

$cartManager->initCode();
$quantity = $cartManager->getCartQuantity();

if(isset($_POST["quantity"]) and isset($_POST["id"])){

    $cartManager->editCartLine($_POST["id"], $_POST["quantity"]);
}

?>