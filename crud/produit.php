<?php

class Produit{
    private $Id;
    private $Nom;
    private $Descriptions;
    private $Prix;

    
    public function getId() {
        return $this->Id;
    }
    public function setId($id) {
        $this->Id = $id;
    }

    public function getNom() {
        return $this->Nom;
    }
    public function setNom($Nom) {
        $this->Nom = $Nom;
    }

    public function getDescriptions() {
        return $this->Descriptions;
    }
    public function setDescriptions($Descriptions) {
        $this->Descriptions = $Descriptions;
    }

    public function getPrix() {
        return $this->Prix;
    }
    public function setPrix($Prix) {
        $this->Prix = $Prix;
    }

}
     
?>