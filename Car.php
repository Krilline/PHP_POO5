<?php

// Car.php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';

final class Car extends Vehicle implements LightableInterface
{
    private $energy;
    private $energyLevel;

    const ALLOWED_ENERGIES = [
        'Diesel',
        'Electric', ];

    public function __construct($color, $nbSeats, $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn(): int
    {
        return true;
    }

    public function switchOff(): int
    {
        return false;
    }
}