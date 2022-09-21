<?php
    class Car {
        protected $model;
        public function setModel($model) {
            $this->model = $model;
        }
    }
    class SportsCar extends Car {
        public function hello() {
            return "Beep! I am a <i>".$this->model."</i><br/>"; 
        }
    }
    $SportsCar1 = new SportsCar;
    $SportsCar1->setModel('Merci');
    echo $SportsCar1->hello();
?>