<?php
    class User{

        protected $email;
        protected $name;
        protected $surname;
        protected $address;
        protected $cart = [];
        protected $discountPercentage = 0;

        public function __construct($_email, $_name, $_surname, $_address){
            $this->email = $_email;
            $this->name = $_name;
            $this->surname = $_surname;
            $this->address = $_address;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getAddress(){
            return $this->address;
        }

        public function setEmail($_email){
            $this->email = $_email;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function setSurname($_surname){
            $this->surname = $_surname;
        }

        public function setAddress($_address){
            $this->address = $_address;
        }

        public function getDiscountPercentage(){
            return $this->discountPercentage;
        }

        public function setDiscountPercentage($_discountPercentage){
            $this->discountPercentage = $_discountPercentage;
        }

        public function getCart(){
            return $this->cart;
        }

        public function addItemsToCart($item){
            $this->cart[] = $item;
        }
    }