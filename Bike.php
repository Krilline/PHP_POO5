<?php

// Bike.php
require_once 'LightableInterface.php';
require_once 'Vehicle.php';

final class Bike extends Vehicle implements LightableInterface
{
    public function switchOn(): int
    {
        if($this->currentSpeed > 10){
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): int
    {
        return false;
    }
}