<?php
session_start();
echo "hello" ;
include "produitManager.php";

// if(isset($_GET["id"])){
//     $id=$_GET["id"];
//     $gestion = new gestionProduit();
//     $data = $gestion->afficherProduit($id);
//     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php 
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $gestion = new gestionProduit();
        $data = $gestion->afficherProduit($id);
        }
    foreach($data as $value){
    ?>
    <section>
            
    <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="R.png" alt="Card image cap">
     <div class="card-body">
    <h5 class="card-title"><?php echo $value->getNom(); ?></h5>
    <p class="card-text"><?php echo $value->getPrix() . "DH"; ?></p>
    </div>

    <div class="text-center"><a href="" <?php echo $value->getId() ?> class="btn btn-primary" href="#">detail</a></div>
    </div>
        <?php } ?>

        <div class="d-flex">
                        <!-- <form  class="" action="ajouter.php" method="POST"> -->
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
        </section>
</body>
</html>