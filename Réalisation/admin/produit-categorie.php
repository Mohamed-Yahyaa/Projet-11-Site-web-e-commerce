<?php

class Produit_Categorie{

    private $Nom ; 
    private $Prix ; 
    private $id ; 
    
    public function getId_Produit() {
        return $this->id;
    }
    public function setId_Produit($id) {
        $this->id = $id;
    }
    
    public function getNom_Produit() {
        return $this->Nom;
    }
    public function setNom_Produit($Nom) {
        $this->Nom = $Nom;
    }
    

    public function getPrix() {
        return $this->Prix;
    }
    public function setPrix($Prix) {
        $this->Prix = $Prix;
    }
   
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) {
        $this->Description = $Description;
    }
   
    public function getCategorie_produit() {
        return $this->Categorie;
    }
    public function setCategorie_produit($Categorie) {
        $this->Categorie = $Categorie;
    }
    public function getDate_dexpiration() {
        return $this->Date;
    }
    public function setDate_dexpiration($Date) {
        $this->Date = $Date;
    }
    public function getQuantite_stock() {
        return $this->Quantite_stock;
    }
    public function setQuantite_stock($Quantite_stock) {
        $this->Quantite_stock = $Quantite_stock;
    }
    public function getPhoto(){
        return $this->Photo;
    }
    public function setPhoto($Photo) {
        $this->Photo = $Photo;
    }

   


// categorie   
   
    public function getId_Categorie() {
        return $this->id;
    }
    public function setId_Categorie($id) {
        $this->id = $id;
    }

    public function getNom_Categorie() {
        return $this->Categorie;
    }
    public function setNom_Categorie($Categorie) {
        $this->Categorie = $Categorie;
    }


}