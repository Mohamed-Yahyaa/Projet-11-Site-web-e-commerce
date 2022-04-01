<?php
 include 'produit.php';
class GestionProduit{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'yahya', 'DIXTERMORGEN', 'site-e-commerce');
           
         
       
        
        return $this->Connection;
        
    }
    
    public function Ajouter($produit){

        $Nom = $produit->getNom();
        $descriptions = $produit->getDescriptions();
        $prix = $produit->getprix();
        // requête SQL
        $insertRow="INSERT INTO produit(Nom, descriptions, prix) 
                                VALUES('$Nom', '$descriptions', '$prix')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher(){
        $SelctRow = 'SELECT id,Nom,descriptions,prix FROM produit';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produit_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($produit_data as $value_Data) {
            $produit = new Produit();
            $produit->setId($value_Data['id']);
            $produit->setNom($value_Data['Nom']);
            $produit->setDescriptions ($value_Data['descriptions']);
            $produit->setPrix ($value_Data['prix']);
            array_push($TableData, $produit);
        }
        return $TableData;
    }


    public function RechercherParId($id){
        $SelectRowId = "SELECT * FROM produit WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $produit_data = mysqli_fetch_assoc($result);
        $produit = new Produit();
        $produit->setId($produit_data['id']);
        $produit->setNom($produit_data['Nom']);
        $produit->setDescriptions ($produit_data['descriptions']);
        $produit->setPrix ($produit_data['prix']);
        
        return $produit;
    }

    public function delete($id){
        $RowDelet = "DELETE FROM produit WHERE id= '$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$Nom,$descriptions,$prix){
        // Requête SQL
        $RowUpdate = "UPDATE produit SET 
        Nom='$Nom', descriptions='$descriptions', prix='$prix'
        WHERE id=$id";

        mysqli_query($this->getConnection(),$RowUpdate);

    }

    public function getForSkin(){

        $product = "SELECT * FROM products WHERE category = 'skin' ";
    }

    public function getForBeauty(){

        $product = "SELECT * FROM products WHERE category = 'beauty' ";
        
    }



}
?>