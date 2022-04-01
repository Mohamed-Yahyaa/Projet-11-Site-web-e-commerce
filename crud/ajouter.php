<?php

include "catégoriemanager.php";
// Trouver tous les employés depuis la base de données 
$gestionCatégorie = new GestionCatégorie();


if(!empty($_POST)){
    $catégorie = new Catégorie();
    $catégorie->setNom($_POST['Nom']);
    $catégorie->setDescriptions($_POST['descriptions']);
    $gestionCatégorie->Ajouter($catégorie);

    // Redirection vers la page index.php
    header("Location: index.php");
}
?>

<form action="" method="POST">
Nom: <input type="text" name="Nom" >
descriptions : <input type="text" name="descriptions" >


<button type="submit">ajouter</button>
</form>
