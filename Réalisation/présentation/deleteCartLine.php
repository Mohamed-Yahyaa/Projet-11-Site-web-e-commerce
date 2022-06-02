<?php
include '../manager/cartManager.php';

$cartManager = new CartManager();

    if(isset($_GET["id"])){
        $cartManager->deleteCartLine($_GET["id"]);
        header("location: product-cart.php");

    }
?>