<?php
    class Cart {
        private $id;
        private $userReference;


        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setUserReference($userRef){
            $this->userReference = $userRef;
        }

        function getUserReference(){
            return $this->userReference;
        }
    }
?>