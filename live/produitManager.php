<?php
 include "produitClass.php";
 class gestionProduit{

   private $connection = NULL ;

   private function getConnection(){

    $this->connection = mysqli_connect('localhost', 'yousra' ,'test123' , 'live');

    return $this->connection ;
   }

   public function afficher(){
       $selectRow = 'SELECT * FROM produit';
       $query = mysqli_query($this->getConnection() , $selectRow);
       $produit_data = mysqli_fetch_all($query , MYSQLI_ASSOC);
       $TableData = array();
       foreach($produit_data as $value_data){
           $produit = new produit();
           $produit->setId($value_data['id']);
           $produit->setNom($value_data['nom']);
           $produit->setPrix($value_data['prix']);
           array_push($TableData , $produit);

           return $TableData ;

       }
       
   }

   public function afficherProduit($id){
    $selectRow = "SELECT * FROM produit WHERE id = $id";
    $query = mysqli_query($this->getConnection() , $selectRow);
    $produit_data = mysqli_fetch_all($query , MYSQLI_ASSOC);
    $TableData = array();
    foreach($produit_data as $value_data){
        $produit = new produit();
        $produit->setId($value_data['id']);
        $produit->setNom($value_data['nom']);
        $produit->setPrix($value_data['prix']);
        array_push($TableData , $produit);

        return $TableData ;

    }
 }

 public function set($key,$value){
    $_SESSION["paniers"]["produit"][$key] = $value ;

}
//supprimer session
public function delete($id){
    if(isset($_SESSION["paniers"]["produit"][$id])){
        unset($_SESSION["paniers"]["produit"][$id]);
    }
}

  // afficher session

//   public function getPanier(){
//     if(isset($_SESSION["paniers"]["produit"])){
//         return $_SESSION["paniers"]["produit"];
//         return array();
//     }
// }
 // pour afficher  session 
 public function getProduit($id){
    if(isset($_SESSION["paniers"]["produit"][$id])){
        return $_SESSION["paniers"]["produit"][$id];
        return null ; 
    }
}
}