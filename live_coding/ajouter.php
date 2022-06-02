<?php
session_start();
include 'produitManager.php';
$gestionProduit = new produitManager();

$id=$_POST['id'];
$data = $gestionProduit->afficherProduit($id);

foreach($data as $value);
$valeurs = array(
    "Nom" => $value->getNom(),
    'Prix' => $value->getPrix(),
    'quantite' => $_POST["quantite"] ,
    'id' => $value->getId(),
);
$gestionProduit->set( $_POST["id"], $valeurs);

header("location: panier.php");


