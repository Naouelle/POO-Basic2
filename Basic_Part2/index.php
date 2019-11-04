<?php


require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';


$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$scania = new Truck('blue', 3, 'super', 60);

echo $scania->forward();
echo '<br>' .$scania->brake();
echo '<br>' .$scania->getTruck();


$scania->setTruck(60);
var_dump($scania);
echo '<br>' .$scania->isTruckFull();

$fiat = new Truck('yellow', 2, 'fuel', 50);
$fiat->setTruck(80);
echo $fiat->isTruckFull();



