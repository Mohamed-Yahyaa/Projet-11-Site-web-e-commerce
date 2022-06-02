<?php
    class Liste{
        private $id;
        private $titre;
        private $lien_youtube = array();


        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setUserReference($titre_Video){
            $this->$titre = $titre_Video;
        }

        function getUserReference(){
            return $this->$titre;
        }

        function setCartLineList($lien_youtube){
            array_push($this->$lien_youtube, $lien_youtube);
        }

        function getCartLineList(){
            return $this->$lien_youtube;
        }
    }
?>