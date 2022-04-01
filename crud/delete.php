<?php
    include "catégoriemanager.php";

if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
    $gestionCatégorie = new GestionCatégorie();
    $id = $_GET['id'] ;
    $gestionCatégorie->delete($id);

    header('Location: index.php');
}
?>