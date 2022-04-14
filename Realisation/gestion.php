<?php


 include 'produit-categorie.php';
 include 'productClass.php';
class Gestion{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'yahya', 'DIXTERMORGEN', 'e-commerce');
            
           
         
       
        
        return $this->Connection;
        
    }
    
 

    
    public function afficherCatigore($Categorie){
        $SelctRow = "SELECT * FROM panier
         INNER JOIN categorie ON produit.categorie_produit = categorie.id_categorie where nom_categorie ='$Categorie'  ";
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $TableData = array();
        foreach ( $produits_data as $value_Data) {
                  
                   
                   $produit = new Produit_Categorie();
                   $produit->setId_Produit($value_Data['id_produit']);   
                   $produit->setPrix($value_Data['prix']);   
                   $produit->setNom_Produit($value_Data['nom_produit']);   
                   $produit->setDescription($value_Data['description']);   
                   $produit->setDate_dexpiration($value_Data["date_d'expiration"]);   
                   $produit->setCategorie_produit($value_Data["categorie_produit"]);   
                   $produit->setQuantite_stock($value_Data["quantite_stock"]);   
                   $produit->setNom_Categorie($value_Data["nom_categorie"]);   
                   $produit->setPhoto($value_Data["photo"]);   
                   array_push($TableData, $produit);
                   
                }
             
             
                   return $TableData;
    }

    
    public function getAllProducts(){
        $SelctRow = "SELECT * FROM panier
         INNER JOIN categorie ON produit.categorie_produit = categorie.id_categorie ";
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $TableData = array();
        foreach ( $produits_data as $value_Data) {
                  
                    
                    $product = new Product();
                    $product->setId($value_Data['id_produit']);
                    $product->setName($value_Data['nom_produit']);
                    $product->setPrice($value_Data['prix']);
                    $product->setDescription($value_Data['description']);
                    $product->setDateOfExpiration($value_Data["date_d'expiration"]);
                    $product->setQuantity($value_Data['quantite_stock']);
                    $product->setCategory($value_Data['categorie_produit']); 
                    $product->setImage($value_Data["photo"]);   
                    array_push($TableData, $product);
                   
                }
             
             
                   return $TableData;
    }
    
    public function afficherProduit($id){
        $SelctRow = "SELECT * FROM panier
         INNER JOIN categorie ON produit.categorie_produit = categorie.id_categorie where id_produit = '$id' ";
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $TableData = array();
        foreach ( $produits_data as $value_Data) {
                  
                   
                   $produit = new Produit_Categorie();
                   $produit->setId_Produit($value_Data['id_produit']);   
                   $produit->setPrix($value_Data['prix']);   
                   $produit->setNom_Produit($value_Data['nom_produit']);   
                   $produit->setDescription($value_Data['description']);   
                   $produit->setDate_dexpiration($value_Data["date_d'expiration"]);   
                   $produit->setCategorie_produit($value_Data["categorie_produit"]);   
                   $produit->setQuantite_stock($value_Data["quantite_stock"]);   
                   $produit->setNom_Categorie($value_Data["nom_categorie"]);   
                   $produit->setPhoto($value_Data["photo"]);   
                   array_push($TableData, $produit);
                   
                }
             
             
                   return $TableData;
    }

}
?>