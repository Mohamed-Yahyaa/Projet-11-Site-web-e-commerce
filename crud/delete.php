<?php
    include "produitmanager.php";

if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
    $gestionProduit = new GestionProduit();
    $id = $_GET['id'] ;
    $gestionProduit->delete($id);

    header('Location: index.php');
}
?>