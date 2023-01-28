<?php


interface Animal {
    public function makeSound($sound);
}

class dog implements Animal {
    public function makeSound($sound = 'haw haw', $color = 'red') {
        echo "{$sound} color is {$color} <br>";
    }
}
class cat implements Animal {
    public function makeSound($sound = 'meaw') {
        echo $sound;
    }
}

$dog = new dog();
// $dog->makeSound();
// echo '<br>';

$cat = new cat();
// $cat->makeSound();

$animals = array($dog, $cat);
foreach ($animals as $animal) {
    echo $animal->makeSound();
}
?>