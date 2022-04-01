<?php

class Catégorie{
    private $Id;
    private $Nom;
    private $Descriptions;
    

    
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

   

}
     
?>