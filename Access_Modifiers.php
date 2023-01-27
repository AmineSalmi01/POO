<?php

class Person {
    public $name;
    protected $age;
    private $salle;

    function set_name($salle)
    {
        $this->salle = $salle;
    }

    function get_name()
    {
        return $this->salle;
    }
}

$amine = new Person();
$amine->set_name('202   ');
echo $amine->get_name();
// $amine->age = '22';
// $amine->salle = 'salle 5';
 ?>