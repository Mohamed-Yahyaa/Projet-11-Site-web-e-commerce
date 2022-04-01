<?php

include "catégoriemanager.php";
$gestionCatégorie = new GestionCatégorie();
 $catégorie = new  Catégorie();

if(isset($_GET['id'])){
    $catégorie = $gestionCatégorie->Catégorie($_GET['id']);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $Nom = $_POST['Nom'];
    $descriptions = $_POST['descriptions'];
    $gestionCatégorie->edit($id,$Nom,$descriptions);
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


<form method="post" action="">
    <input type="text" required="required" 
        id="id" name="id"   
        value=<?php echo $catégorie->getId()?> >

    <div>
        <label for="Nom">Nom</label>
        <input type="text" required="required" 
        id="Nom" name="Nom"  placeholder="Nom" 
        value=<?php echo $catégorie->getNom()?> >
    </div>
    <div>
        <label for="descriptions">descriptions</label>
        <input type="text" required="required" 
        id="descriptions" name="descriptions" placeholder="descriptions"
        value=<?php echo $catégorie->getdescriptions()?>>
    </div>
   
    <div>
        <input name="edit" type="submit" value="edit">
        <a href="index.php">Annuler</a>
    </div>
</form>
</body>
</html>