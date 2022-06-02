<?php
class produit {
    private $nom ;
    private $prix;
    private $id ;

    public function getId(){
        return $this->id ;
    }
    
    public function setId($id){
        $this->id = $id ;
    }

    public function getNom(){
        return $this->nom ;
    }
    public function setNom($nom){
        $this->nom = $nom ;
    }

    public function getPrix(){
        return $this->prix ;
    }
    public function setPrix($prix){
        $this->prix = $prix ;
    }

}