<?php 

abstract class Solicode {
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    abstract function message() : string;
}

class formateur extends Solicode {
    function message() : string {
        return "Name The Formateur is {$this->name}";
    }
}

class Student extends Solicode {
    function message() : string {
        return "Name the Student is {$this->name}";
    }
}

$Formateur = new formateur('Soqlabi');
echo $Formateur->message();
echo '<br>';

$student = new Student('amine');
echo $student->message();
?>