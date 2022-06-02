<?php

include "produit.php" ;
 class produitManager {

    private $connection = NULL ;

    private function getConnection(){

        $this->connection = mysqli_connect('localhost' , 'yousra' , 'test123' , 'site-e-commerce');


        return $this->connection ;
    }


    public function afficher(){

        $selectRow = 'SELECT * FROM produits';
        $query = mysqli_query($this->getConnection() , $selectRow) ;
        $produit_data = mysqli_fetch_all($query , MYSQLI_ASSOC);
        $TableData = array();
        foreach ($produit_data as $value_data){
            $produit = new Produit();
            $produit->setId($value_data['id']);
            $produit->setNom($value_data['Nom']);
            $produit->setPrix($value_data['Prix']) ;

            array_push($TableData , $produit);

        }

        return $TableData ;

    }

    public function afficherProduit($id){
        $selectRow ="SELECT * FROM produits WHERE id =$id" ;
        $query = mysqli_query($this->getConnection() , $selectRow) ;
        $produit_data = mysqli_fetch_all($query , MYSQLI_ASSOC);
        $TableData = array();
        foreach ($produit_data as $value_data){
            $produit = new produit();
            $produit->setId($value_data['id']);
            $produit->setNom($value_data['Nom']);
            $produit->setPrix($value_data['Prix']) ;

            array_push($TableData , $produit);

        }

        return $TableData ;

        
    }

    public function set($key , $value){
        $_session["paniers"]["produits"][$key]= $value ;
    }

    public function getPanier(){
        if(isset($_session["paniers"]["produits"])){
            return $_session["paniers"]["produits"];
            return array();
        }
    }

    public function getProduit($id){
        if(isset($_session["paniers"]["produits"])){
            return $_session["paniers"]["produits"];
            return NULL;
        }
    }

 }