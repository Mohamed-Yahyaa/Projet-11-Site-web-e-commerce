

<?php

$conn= mysqli_connect("localhost",'test','test123','e-commerce');

if(isset($_POST["update"])){

    $file= $_FILES["image"]['name'];


    $q = "INSERT INTO produit(photo) VALUES('$file')";

    $rest = mysqli_query($conn , $q);

if($rest){
    move_uploaded_file($_FILES["image"]['tmp_name'], $file);


}

}


?>



















<form action="" method="post">

<input type="file" name="image">
<input type="submit" value="btn" name="update">


</form>