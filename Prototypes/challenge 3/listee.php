<?php 
session_start();

// print_r($_SESSION["paniers"]);

include 'Gestion.php';

$gestion = new Liste();

$listmusic = $gestion->getListe();


?>

        <table border="2" width="50%" >
             <tr>
                <th>id</th>
                <th>titre</th>
                <th>lien youtube</th>
               
                
             </tr>
      
        <?php
          foreach($listmusic as $value){
          

            ?>
          
            <tr >
                
                <td><?= $value["id"] ?></td>
                <td><?= $value["nom"] ?></td>
                <td><?= $value["prix"] ?> dh</td>
                <td><?= $value["qnt"] ?></td>
            
              
            </tr> 
            
             
        <?php } ?>


     </table>

   

     <a href="index.php">back</a>


     