<?php
    class CartLine{
        private $idCartLine;
        private $idProduct;
        private $idCart;
        private $productCartQuantity;

        function setIdCartLine($idCartLine){

            $this->idCartLine = $idCartLine;
        }

        function getIdCartLine(){
            return $this->idCartLine;
        }

        function setIdProduct($idProduct){

            $this->idProduct = $idProduct;
        }

        function getIdProduct(){
            return $this->idProduct;
        }

        function setIdCart($idCart){

            $this->idCart = $idCart;
        }

        function getIdCart(){
            return $this->idCart;
        }

        function setProductCartQuantity($productCartQuantity){

            $this->productCartQuantity = $productCartQuantity;
        }

        function getProductCartQuantity(){
            return $this->productCartQuantity;
        }
    }
?> 