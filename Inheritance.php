<?php

class Person {
    protected $name;
    protected $phone;

    function __construct($name, $phone){
        $this->name = $name;
        $this->phone = $phone;
    }
    function getData(){
        echo "The student is {$this->name} and his phone is {$this->phone}";
    }

}

class student extends Person {
    
    // function display_name()
    // {
    //     return $this->name;
    // }
}

$amine = new student('Amine', '0698161485');
$amine->getData();
// echo $amine->display_name();
?>