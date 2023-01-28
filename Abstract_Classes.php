<?php 

abstract class Solicode {
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function message();
}

class formateur extends Solicode {
    function message() {
        return "Name The Formateur is {$this->name}";
    }
}

class Student extends Solicode {
    function message() {
        return "Name the Student is {$this->name}";
    }
}

$Formateur = new formateur('Soqlabi');
echo $Formateur->message();
echo '<br>';

$student = new Student('amine');
echo $student->message();
?>