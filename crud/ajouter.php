<?php

include "produitmanager.php";
// Trouver tous les employés depuis la base de données 
$gestionProduit = new GestionProduit();


if(!empty($_POST)){
    $produit = new Produit();
    $produit->setNom($_POST['Nom']);
    $produit->setDescriptions($_POST['descriptions']);
    $produit->setPrix($_POST['prix']);
    $gestionProduit->Ajouter($produit);

    // Redirection vers la page index.php
    header("Location: index.php");
}
?>

<form action="" method="POST">
Nom: <input type="text" name="Nom" >
descriptions : <input type="text" name="descriptions" >
prix : <input type="prix"  name="prix" >

<button type="submit">ajouter</button>
</form>
