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
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">LES PRODUIT</h1>
                </div>
            </div>
        </header>
        <?php 
include 'gestionProduit.php';
$gestionProduit = new GestionProduit();
$data= $gestionProduit->afficher();

?>

        <section class="py-5">
       
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
        foreach($data as $value){

          ?>
                <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="OIP.jfif" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?= $value->getNom();?></h5>
                                    <?= $value->getPrix();?> DH
                                </div>
                                <div class="text-center"><a href="detail de produit.php?id=<?= $value->getId();?>"class="btn btn-outline-dark mt-auto" href="#">Détail</a></div>
                            </div>                               
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                   </section>
                      
                           
    
    </body>
</html>





