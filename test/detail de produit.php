<?php
session_start();

?>
<!-- CSS only -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <?php  
include 'gestionProduit.php';


if(isset($_GET["id"])){
$id=$_GET["id"];

}
$gestion = new GestionProduit();
$data = $gestion->afficherProduit($id);
foreach($data as $value){
?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0" src="OIP.jfif" alt="..." /></div>
                    <div  class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $value->getNom();?></h1>
                        <div class="fs-5 mb-5">
                           
                            <span><?= $value->getPrix();?> DH</span>
                            <?php 
                            }
                         ?>
                        </div>
                        <div class="d-flex">
                        <form  class="" action="ajouter.php" method="POST">
                          <p>
                          <label for="btn btn-outline-dark flex-shrink-0"> Quantite</label>
                          <input type="number" name="quantite" value="1" >
                           </p>
                        <p>
                           <input type="hidden" name="id" value="<?=  $value->getId() ?>">
                            
                            <button class="btn btn-outline-dark flex-shrink-0" type="submit" >
                                <i class="bi-cart-fill me-1"></i> ajouter au panier  </button>
                           
                            </p>
                        </div>
                    </div>
                </div>
            </div>

</html>




