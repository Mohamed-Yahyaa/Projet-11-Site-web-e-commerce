<?php
session_start();
include 'cartManager.php';
$cartManager = new CartManager();




if(isset($_POST['id'])){

    $id=$_POST['id'];
    $cartLine = new CartLine();
    $cart = new Cart();
    $cartLineList = [];
    $cart = $cartManager->getCart($_COOKIE['cartCookie']);

    $data = $cartManager->afficherProduit($id);
    
    foreach($data as $value);
    $cartLine->setIdCart($cart->getId());

    $valeurs = array(
        "name" => $value->getName(),
        'prix' => $value->getPrice(),
        'quantite' => $_POST["quantite"] ,
        'id' => $value->getId(),
    );
    $cartManager->set($_POST["id"], $valeurs);


    header("location: panier.php");

}
