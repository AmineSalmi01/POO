<?php

class Car {
    public $name;
    public $color;

     function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

     function __destruct(){
        echo "the car is {$this->name} and the color is {$this->color}";
    }
}
$bmw = new Car('BMW', 'Black');

?>