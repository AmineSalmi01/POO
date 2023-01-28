<?php

class Person {
    protected $name;
    protected $phone;

    function __construct($name, $phone){
        $this->name = $name;
        $this->phone = $phone;
    }


}

class student extends Person {

    protected function getData(){
        echo "The student is {$this->name} and his phone is {$this->phone}";
    }

    function display_data()
    {
        return $this->getData();
    }
}

$amine = new student('Amine', '0698161485');
$amine->display_data();
?>