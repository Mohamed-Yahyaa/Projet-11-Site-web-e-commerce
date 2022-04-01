
 <?php  
session_start();


include 'GestionPanier.php';


if(isset($_GET["id"])){
$id=$_GET["id"];

}
$gestion = new GestionProduit();
$data = $gestion->afficherProduit($id);

$listProduits = $gestion->getPanier();


foreach($data as $value){
?>
   <h1><?= $value->getNom();?></h1>
   <p> Prix:<?= $value->getPrix();?></p>
   <?php 
}
?>



<form action="ajouter.php" method="POST">
<p>
<label for=""> Quntite</label>
<input type="number" name="qnt" value="1" min="1" >

</p>
<p>
<input type="hidden" name="id" value="<?=  $value->getId() ?>">
<button type="submit">ajouter au panier</button>
</p>
</form>


<?php

$total= 0;

  foreach($listProduits as $value){
  
    $total =  $total + $value["qnt"] ;
    ?>
  

  <?php } ?>
  <div class="card">
        <td> 🛒 <?= $total ?> </td>
        </div>
<br>
<br>

        <a href="index.php">Back</a>