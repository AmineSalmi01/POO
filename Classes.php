<?php

class Solicode {
    
    public $student;
    public $salle;

    function set_student($student){
        $this->student = $student;
    }
    function get_student(){
        return $this->student;
    }
    function set_salle($salle){
        $this->salle = $salle;
    }
    function get_salle(){
        return $this->salle;
    }
}

$amine = new Solicode();
$salle = new Solicode();
$amine->set_student('amine');
$salle->set_salle('202');
echo $amine->get_student();
echo "<br>";
echo $salle->get_salle();


?>