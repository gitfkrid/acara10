<?php
    class Car {
        final public function hello() {
            return "beep";
        }
    }
    class SportsCar extends Car {
        public function hello() {
            return "Hallo"; 
        }
    }
    $SportsCar1 = new SportsCar;
    echo $SportsCar1->hello();
?>