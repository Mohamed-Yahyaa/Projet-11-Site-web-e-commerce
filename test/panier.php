<?php
session_start();

?>
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

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Panier</b></h4>
                      
            </div>
            <?php 
                    
                            include 'gestionProduit.php';

                             $gestionProduit = new GestionProduit();

                            $listProduits = $gestionProduit->getPanier();
                       ?>

            <?php
                  foreach($listProduits as $value){
          

                ?>
             <div class="row border-top border-bottom">
            
                <div class="row main align-items-center">
                    
              
                    <div class="col-2">
                    <img class="img-fluid" src="OIP.jfif"></div>
                    <div class="col">
                        <div class="row text-muted"><?= $value["nom"] ?></div>
                        
                        <div class="row">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                    <div class="col"> <a href="modifier.php?id=<?= $value["id"] ?>" class="border"><?= $value["quantite"] ?></a> </div>
                    <div class="col"><?= $value["prix"] ?> DH  <a class="close" href="supprimer.php?id=<?= $value["id"] ?>"> &#10005;</a></div>
                    
                </div>
                  
            </div>
            
            <?php } ?>
        </div>
        
     </div>
     
</div>
<div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Retourner</span></div>
       
 