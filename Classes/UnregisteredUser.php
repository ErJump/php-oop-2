<?php
    include_once __DIR__ . '/User.php';
    class UnregisteredUser extends User{
        protected $discountPercentage = 0;

        public function __construct($_username, $_password, $_email, $_name, $_surname, $_address){
            parent::__construct($_username, $_password, $_email, $_name, $_surname, $_address);
        }

        public function getDiscountPercentage(){
            return $this->discountPercentage;
        }

        public function setDiscountPercentage($_discountPercentage){
            $this->discountPercentage = $_discountPercentage;
        }
    }