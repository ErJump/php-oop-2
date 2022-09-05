<?php
    class Product{
        protected $name;
        protected $price;
        protected $description;
        protected $category;
        protected $image;

        public function __construct($_name, $_price, $_description, $_category, $_image){
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $_description;
            $this->category = $_category;
            $this->image = $_image;
        }

        public function getName(){
            return $this->name;
        }

        public function getPrice(){
            return $this->price;
        }

        public function getDescription(){
            return $this->description;
        }

        public function getCategory(){
            return $this->category;
        }

        public function getImage(){
            return $this->image;
        }

        public function setName($_name){
            $this->name = $_name;
        }

        public function setPrice($_price){
            $this->price = $_price;
        }

        public function setDescription($_description){
            $this->description = $_description;
        }

        public function setCategory($_category){
            $this->category = $_category;
        }

        public function setImage($_image){
            $this->image = $_image;
        }
        
    }