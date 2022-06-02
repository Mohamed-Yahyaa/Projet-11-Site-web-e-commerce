<?php
session_start();
include 'produitManager.php';
$gestionProduit = new produitManager();
$data= $gestionProduit->afficher();
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <header>
            <div class='container-fluid bg-dark text-white d-flex flex-row justify-content-evenly'>
               
                    <h1>LES PRODUIT</h1>
                
            </div>
        </header>
      

        <section class="py-5">
       
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
        foreach($data as $value){

          ?>
                <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="shopping.png" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?= $value->getNom();?></h5>
                                    <?= $value->getPrix();?> DH
                                </div>
                                <div class="text-center"><a href="detailProduit.php?id=<?= $value->getId();?>"class="btn btn-outline-dark mt-auto" href="#">Détail</a></div>
                            </div>                               
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                   </section>
                      
                           
    
    </body>
</html>





