<?php
include "test.html";
include "Liste.php";
class GestionProduit {

    public $name ;

    private $Connection = Null;

    private function getConnection(){
      
         $this->Connection = mysqli_connect('localhost', 'yousra', 'test123', 'site-e-commerce');
              
        return $this->Connection;
    }
    // pour ajouter session
    public function set($key,$value){
        $_SESSION["play_liste"]["music"][$key] = $value ;

    }
    //supprimer session
    public function delete($id){
        if(isset($_SESSION["play_liste"]["music"][$id])){
            unset($_SESSION["play_liste"]["music"][$id]);
        }
    }
    
      // afficher session

      public function getPanier(){
        if(isset($_SESSION["play_liste"]["music"])){
            return $_SESSION["play_liste"]["music"];
            return array();
        }
    }
     // pour afficher  session 
     public function getProduit($id){
        if(isset($_SESSION["play_liste"]["music"][$id])){
            return $_SESSION["play_liste"]["music"][$id];
            return null ; 
        }
    }

// afficher  les produits : page index
    public function afficher(){
        $SelctRow = 'SELECT *  FROM music';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $lien_youtube_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($lien_youtube_data as $value_Data) {
            $lien_youtube = new Liste();
            $lien_youtube->setId($value_Data['id']);
            $lien_youtube->setNom($value_Data['titre']);
            $lien_youtube->setPrix($value_Data['lien_youtube']);
           
            array_push($TableData, $lien_youtube);
        }
          return $TableData;
 
        }
       
// afficher  les produits : page panier

        public function afficherListe($id){
            $SelctRow = "SELECT * FROM music WHERE id =$id";
            $query = mysqli_query($this->getConnection() ,$SelctRow);
            $lien_youtube_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            $TableData = array();
            foreach ($music_data as $value) {
                $lien_youtube = new Produit();
                $lien_youtube->setId($value['id']);
                $lien_youtube->setNom($value['Nom']);
                $lien_youtube->setPrix($value['Prix']);
               
                array_push($TableData, $lien_youtube);
            }
              return $TableData;
        }
    
    }
    
          
    
