<?php
    class User{
        protected $username;
        protected $password;
        protected $email;
        protected $name;
        protected $surname;
        protected $address;

        public function __construct($_username, $_password, $_email, $_name, $_surname, $_address){
            $this->username = $_username;
            $this->password = $_password;
            $this->email = $_email;
            $this->name = $_name;
            $this->surname = $_surname;
            $this->address = $_address;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
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

        public function setUsername($_username){
            $this->username = $_username;
        }

        public function setPassword($_password){
            $this->password = $_password;
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
    }