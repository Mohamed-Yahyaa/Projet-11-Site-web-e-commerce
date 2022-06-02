<?php
// include "detail_produit.php" ;
include 'produitManager.php';
$gestionProduit = new gestionProduit();
$data= $gestionProduit->afficher();
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
    <header>
        <nav class='container-fluid bg-dark text-white d-flex flex-row justify-content-evenly'>
            <h1>Les produits</h1>
        </nav>
</header>
<main>
    <section class="container-fluid  text-center mt-5 d-flex flex-row justify-content-evenly">

    <?php foreach($data as $value){?>
    <div class="card" style="width: 13rem;">
    <img class="card-img-top" src="R.png" alt="Card image cap">
     <div class="card-body">
    <h5 class="card-title"><?php echo $value->getNom(); ?></h5>
    <p class="card-text"><?php echo $value->getPrix() . "DH"; ?></p>
    </div>

    <div class="text-center"><a href="detail_produit.php" <?php echo $value->getId() ?> class="btn btn-primary" href="#">detail</a></div>
    </div>
        <?php } ?>
    </section>

</main>
</body>
</html>