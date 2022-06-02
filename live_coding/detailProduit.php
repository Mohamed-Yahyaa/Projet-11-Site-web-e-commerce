<?php
session_start();
include 'produitManager.php';

?>
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
        <?php  


if(isset($_GET["id"])){
$id=$_GET["id"];
$gestion = new produitManager();
$data = $gestion->afficherProduit($id);
}

foreach($data as $value){
?>
        <section class="py-5">
            <div >
                <div class='  text-black d-flex flex-row justify-content-evenly container px-4 px-lg-5 my-5'>
                    <div >
                    <img  src="shopping.png" alt="..." /></div>
                    <div  class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?= $value->getNom();?></h1>
                        <div class="fs-5 mb-5">
                           
                            <span><?= $value->getPrix();?> DH</span>
                            <?php 
                            }
                         ?>
                        </div>
                        <div class="d-flex">
                        <form  class="" action="panier.php" method="POST">
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




