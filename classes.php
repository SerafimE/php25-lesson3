<?php

class Car
{
    var $brand;
    var $color;
    var $speed = 100;

    function go($speed = 10)
    {
        //$this->speed += $speed;
        $this->speed = $this->speed + $speed;
    }

    function describe()
    {
        $this->go();
        $result = 'brand: ' . $this->brand . '<br>';
        //$result .= 'color: ' . $this->color . '<br>';
        $result = $result . 'color: ' . $this->color . '<br>';
        $result .= 'speed: ' . $this->speed . '<br>';

        return $result;
    }
}

$opel = new Car();
var_dump($opel->brand);
$opel->brand = 'Opel';
$opel->color = 'Yellow';

$mercedes = new Car();
$mercedes->brand = 'Mercedes';
$mercedes->color = 'Silver';

echo '<pre>';
print_r($opel);
print_r($mercedes);

$opel->go();

print_r($opel);
print_r($mercedes);

echo $opel->describe();
echo $mercedes->describe();