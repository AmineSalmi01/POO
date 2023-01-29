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

interface CapitalInterface {

    public function insert($item);
    public function delete($item);
    public static function stock($item);

}

class managmentCity implements CapitalInterface{

    public static $count = 0;
    public static $data;

    public function insert($item)
    {
        Self::$count++;
        Self::stock($item);
        return ['counter' => Self::$count , 'data' => Self::$data];
    }

    public static function stock($item)
    {
        Self::$data[] = $item;
    }

    public function delete($item)
    {
        $index_key = array_search($item->displaye(), Self::$data);
        unset(Self::$data[$index_key]);
        Self::$count--;
        return ['counter' => Self::$count, 'data'=> Self::$data];
    }
}

// country 
class managmentCounyrt implements CapitalInterface {

    public static $count = 0;
    public static $data;

    public function insert($item)
    {
        Self::$count++;
        Self::stock($item);
        return ['counter' => Self::$count , 'data' => Self::$data];
    }

    public static function stock($item)
    {
        Self::$data[] = $item;
    }

    public function delete($item)
    {
        $index_key = array_search($item->displaye(), Self::$data);
        unset(Self::$data[$index_key]);
        Self::$count--;
        return ['counter' => Self::$count, 'data'=> Self::$data];
    }
} 

echo '<pre>';
echo 'City <br>';
$city = new City('tanger', 'arabic');
$city1 = new City('roma', 'talian');
$city2 = new City('titwan', 'arabic');
// print_r($city->displaye());
$managmentCity = new managmentCity();
$managmentCity2 = new managmentCity();

print_r($managmentCity->insert($city1->displaye()));
print_r($managmentCity->insert($city->displaye()));
print_r($managmentCity->delete($city));

print_r($managmentCity2->insert($city2->displaye()));


echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';


echo 'country <br>';
$Country = new Country('maroc', 'arabic');
$Country1 = new Country('France', 'francais');
$managmentCounyrt = new managmentCounyrt();
print_r($managmentCounyrt->insert($Country->displaye()));
print_r($managmentCounyrt->insert($Country1->displaye()));
print_r($managmentCounyrt->delete($Country1));

// print_r($Country->displaye());
echo '</pre>';  
?>


