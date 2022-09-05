<?php
    include_once __DIR__ . '/Product.php';
    include_once __DIR__ . '../Traits/Seasonal.php';
    class Food extends Product{
        use Seasonal;
        protected $expirationDate;
        protected $ingredients;
        protected $weight;

        public function __construct($_name, $_price, $_description, $_category, $_image, $_expirationDate, $_ingredients, $_weight){
            parent::__construct($_name, $_price, $_description, $_category, $_image);
            $this->expirationDate = $_expirationDate;
            $this->ingredients = $_ingredients;
            $this->weight = $_weight;
        }

        public function getExpirationDate(){
            return $this->expirationDate;
        }

        public function getIngredients(){
            return $this->ingredients;
        }

        public function getWeight(){
            return $this->weight;
        }

        public function setExpirationDate($_expirationDate){
            $this->expirationDate = $_expirationDate;
        }

        public function setIngredients($_ingredients){
            $this->ingredients = $_ingredients;
        }

        public function setWeight($_weight){
            $this->weight = $_weight;
        }
    }