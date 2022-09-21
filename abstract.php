<?php
    abstract class Car {
        protected $tankvolume;
        public function setTankvolume($volume) {
            $this->tankvolume = $volume;
        }
        abstract public function calcnummilesonfulltank();
    }
?>