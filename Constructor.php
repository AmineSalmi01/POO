<?php
class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function get_name() {
        return $this->name;
    }
    function get_age() {
        return $this->age;
    }
}
$amine = new Person('amine', '22');
echo $amine->get_name();
echo 'br';
echo $amine->get_age();
?>