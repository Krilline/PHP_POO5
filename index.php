<?php

require_once 'Bike.php';
$bike = new Bike("Red", 2);
$bike->setCurrentSpeed(20);
$bike->setNbWheels(2);
var_dump($bike);

require_once 'Car.php';
$car = new Car("Green", 4, "Electric");
$car->setNbWheels(4);
$car->setCurrentSpeed(50);
$car->setEnergyLevel("Bas");
var_dump($car);

require_once 'SkateBoard.php';
$skateBoard = new SkateBoard("Red", 1);
$skateBoard->setCurrentSpeed(10);
$skateBoard->setNbWheels(2);
var_dump($skateBoard);