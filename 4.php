<?php
class Car
{
    public $color;
    public $year;
    public $manufacturer;

    public function __construct($color, $year, $izgotovitel)
    {
        $this->color = $color;
        $this->year = $year;
        $this->manufacturer = $izgotovitel;
    }
    public function startEngine()
    {
        /**
         большой кусок кода завода мотора
         */
    }

    public function go()
    {
        /**
         реализация езда
         */
    }
}

$myCar = new Car('red',2017,'Mersedes'); //новый слепок

//$myCar->color = 'red';
//$myCar->year = 2017;
//$myCar->manufacturer = 'Mersedes';

$myCar->startEngine();
$myCar->go();

$myCar2 = new Car();
$myCar3 = new Car();