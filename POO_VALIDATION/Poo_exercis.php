<?php

abstract class Capital {

    protected $name;
    protected $language;

    function __construct($name, $language)
    {
        $this->name = $name;
        $this->language = $language;
    }

    abstract function displaye();
}

class City extends Capital {

    function displaye(){
        return $this->name;
    }
}

class Country extends Capital {

    function displaye(){
        return $this->name;
    }
}

interface CapitalInterface{
    public function insert($item);
    public function delete($item);
    public static function stock($item);
}

class managmentCity implements CapitalInterface{
    public $count = 0;
    public static $data;

    public function insert($item)
    {
        $this->count++;
        Self::stock($item);
        return ['counter' => $this->count , 'data' => Self::$data];
    }

    public static function stock($item)
    {
        Self::$data[] = $item;
    }

    public function delete($item)
    {
        $index_key = array_search($item->displaye(), Self::$data);
        unset(Self::$data[$index_key]);
        $this->count--;
        return ['counter' => $this->count, 'data'=> Self::$data];
    }
}

echo '<pre>';
$city = new City('tanger', 'arabic');
$city1 = new City('roma', 'talian');
print_r($city->displaye());
$managmentCity = new managmentCity();

print_r($managmentCity->insert($city1->displaye()));
print_r($managmentCity->insert($city->displaye()));
print_r($managmentCity->delete($city));

echo '<br>';

$Country = new Country('maroc', 'arabic');
print_r($Country->displaye());
echo '</pre>';  
?>


