<?php
    class Accessory extends Product{
        protected $color;
        protected $size;
        protected $tipology;

        public function __construct($_name, $_price, $_description, $_category, $_image, $_color, $_size){
            parent::__construct($_name, $_price, $_description, $_category, $_image);
            $this->color = $_color;
            $this->size = $_size;
        }

        public function getColor(){
            return $this->color;
        }

        public function getSize(){
            return $this->size;
        }

        public function setColor($_color){
            $this->color = $_color;
        }

        public function setSize($_size){
            $this->size = $_size;
        }
    }