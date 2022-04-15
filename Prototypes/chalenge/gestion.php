<?php



include "cartLine.php";
include "product.php";


class Gestion {

    public $name ;

    private $Connection = Null;

    private function getConnection(){
      
            // $this->Connection = mysqli_connect('localhost', 'test', 'test123', 'e-commerce');
            $this->Connection = mysqli_connect('localhost', 'yahya', 'DIXTERMORGEN', 'e-commerce');
           
         
       
        
        return $this->Connection;
    }


    public function getTotalAjoutProduitAuPanier(){
        $sql = "SELECT Nom_product ,SUM(productChariotqnt) AS total FROM chariot_line INNER JOIN product on product.id_product=chariot_line.idProduct GROUP BY  idProduct  ";
        // $sql = "SELECT * ,SUM(productCartQuantity) FROM cart_line  GROUP BY  idProduct ";
        $query = mysqli_query($this->getConnection(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
       
        $TotalAjoutProduitAuPanier = array();
        foreach($result as $value){


            $value['total'];
            $value['Nom_product'];

           
            // $cartLine = new CartLine();
            // $cartLine->setProductCartQuantity($value['total']);
            // $cartLine->setProduct($value['nom_produit']);
           

            
            array_push($TotalAjoutProduitAuPanier, $value);
        }
        return $TotalAjoutProduitAuPanier;
    }
}