<?php
include "product.php";
include "cart.php";
include "cartLine.php";



class CartManager {

    public $name ;

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'yahyaphp', 'test123', 'yahya');
           
         
       
        
        return $this->Connection;
    }


  
    
    // Add product to cart
    public function addProduct($cart, $product, $quantity){
        $cartId = $cart->getId();
        $productId = $product->getId();
        $sql = "INSERT INTO cart_line VALUES($productId, $cartId, $quantity)";
        $result = mysqli_query($this->getConnection(), $sql, );
        if($result){
            $last_id = mysqli_insert_id($this->getConnection());
            return $last_id;
        }
        $this->getConnection()->close();

    }
    
    // pour ajouter session
    public function set($key,$value){
        $_SESSION["paniers"]["products"][$key] = $value ;

    }

      // afficher session

      public function getPanier(){
        if(isset($_SESSION["paniers"]["products"])){
            return $_SESSION["paniers"]["products"];
        }

      }

          //supprimer session
    public function delete($id){
        if(isset($_SESSION["paniers"]["products"][$id])){
            unset($_SESSION["paniers"]["products"][$id]);
        }
    }

    
    // pour afficher  session 
    public function getProduit($id){
        if(isset($_SESSION["paniers"]["products"][$id])){
            return $_SESSION["paniers"]["products"][$id];
            return null ; 
        }
    }

  

// afficher  les produits : page index
    public function afficher(){
        $SelctRow = 'SELECT *  FROM panier';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($produits_data as $value_Data) {
            $product = new Product();
            $product->setId($value_Data['id']);
            $product->setName($value_Data['Nom']);
            $product->setPrice($value_Data['prix']);
            $product->setDescription($value_Data['descreption']);
            $product->setDateOfExpiration($value_Data["date"]);
            $product->setQuantity($value_Data['quantite']);
            $product->setCategory($value_Data['categorie']);
            array_push($TableData, $product);
        }
          return $TableData;
 
        }
  
 
        
// afficher  les produits : page panier

        public function afficherProduit($id){
            $SelctRow = "SELECT * FROM panier WHERE id_produit =$id";
            $query = mysqli_query($this->getConnection() ,$SelctRow);
            $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
            $TableData = array();
            foreach ($produits_data as $value) {
           $product = new Product();
            $product->setId($value['id']);
            $product->setName($value['nom']);
            $product->setPrice($value['prix']);
            $product->setDescription($value['description']);
            $product->setDateOfExpiration($value["date"]);
            $product->setQuantity($value['quantite']);
            $product->setCategory($value['categorie']);
               
                array_push($TableData, $product);
            }
              return $TableData;
        }
      
 


        function compteur(){ 
        if(isset($_SESSION["paniers"]) != null){
                $compteur = count($_SESSION["paniers"]["products"]) ;
            
            }else {
                $compteur = 0;
            
            }
            return $compteur;
        }

        function addCartCookie($cookie){
            $sql = "INSERT INTO carts(userReference) VALUES('$cookie')";
            mysqli_query($this->getConnection(), $sql);
        }

        function getCart($userRefe){
            $sql = "SELECT id from carts WHERE userReference = $userRefe";
            $query = mysqli_query($this->getConnection(), $sql);
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

            $cart = new Cart();
            $cart->setId($result["id"]);
            $cart->setUserReference($result["userReference"]);

            return $cart;
        }
    }
