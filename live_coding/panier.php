<?php
session_start();
include 'produitManager.php';
$gestionProduit = new produitManager();
$listProduits = $gestionProduit->getPanier();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
          

            <?php foreach($listProduits as $value){ ?>
             <div class="row border-top border-bottom">
            
                <div class="row main align-items-center">
                    
              
                    <div class="col-2">
                    <img class="img-fluid" src="shopping.png"></div>
                    <div class="col">
                        <div class="row text-muted"><?= $value["Nom"] ?></div>
                        
                        <div class="row">Lorem ipsum dolor sit amet consectetur adipisicing elit.</div>
                    </div>
                    <div class="col"> <a href="modifier.php?id=<?= $value["id"] ?>" class="border"><?= $value["quantite"] ?></a> </div>
                    <div class="col"><?= $value["Prix"] ?> DH  <a class="close" href="supprimer.php?id=<?= $value["id"] ?>"> &#10005;</a></div>
                    
                </div>
                  
            </div>
            
            <?php } ?>
        </div>
        
     </div>
     
</div>
<div class="back-to-shop"><a href="index.php">&leftarrow;</a><span class="text-muted">Retourner</span></div>
       
 