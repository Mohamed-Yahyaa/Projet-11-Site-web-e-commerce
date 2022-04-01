<?php

include "produitmanager.php";
$gestionProduit = new GestionProduit();

if(isset($_GET['id'])){
    $employe = $gestionProduit->RechercherParId($_GET['id']);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $Nom = $_POST['Nom'];
    $descriptions = $_POST['descriptions'];
    $prix = $_POST['prix'];
    $gestionProduit->Modifier($id,$Nom,$descriptions,$prix);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier : </title>
</head>
<body>

<h1>Modification de l produit : <?=$produit->getNom() ?></h1>
<form method="post" action="">
    <input type="text" required="required" 
        id="id" name="id"   
        value=<?php echo $produit->getId()?> >

    <div>
        <label for="Nom">Nom</label>
        <input type="text" required="required" 
        id="Nom" name="Nom"  placeholder="Nom" 
        value=<?php echo $produit->getNom()?> >
    </div>
    <div>
        <label for="descriptions">descriptions</label>
        <input type="text" required="required" 
        id="descriptions" name="descriptions" placeholder="descriptions"
        value=<?php echo $produit->getdescriptions()?>>
    </div>
    <div>
        <label for="prix">prix</label>
        <input type="prix" required="required"  
        id="prix"  name="prix" placeholder="prix"
        value=<?php echo $produit->prix()?>>
    </div>
    <div>
        <input name="modifier" type="submit" value="Modifier">
        <a href="index.php">Annuler</a>
    </div>
</form>
</body>
</html>