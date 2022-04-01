<?php
      include "catégoriemanager.php";
      
      $gestionCatégorie = new GestionCatégorie();
      $data = $gestionCatégorie->afficher();

?>

<!DOCTYPE html>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="ajouter.php">Add</a>
        <table>
            <tr>
                <th>id</th>
                <th>Nom</th>
                <th>description</th>
                
            </tr>
            <?php 
                   foreach($data as $value){

                    ?>
                    <tr>
                       <td><?= $value->getId() ?></td>
                        <td><?= $value->getNom() ?></td>
                        <td><?= $value->getDescriptions() ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $value->getId() ?>">Edit</a>
                            <a href="delete.php?id=<?php echo $value->getId() ?>">Delete</a>
                        </td>
                    </tr>
                    <?php  }?>
        </table>
    </div>
    
</body>
</html>