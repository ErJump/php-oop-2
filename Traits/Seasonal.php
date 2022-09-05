<?php
    trait Seasonal{
        protected $season;
        protected $startDate;
        protected $endDate;

        public function setSeasonal($_season, $_startDate, $_endDate){
            $this->season = $_season;
            $this->startDate = $_startDate;
            $this->endDate = $_endDate;
        }

        public function getSeason(){
            return $this->season;
        }

        public function getStartDate(){
            return $this->startDate;
        }

        public function getEndDate(){
            return $this->endDate;
        }
    }