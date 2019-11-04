<?php
//Truck.php

require_once 'Vehicle.php';
require_once  'Car.php';

class Truck extends Vehicle
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $loadSize;

    /**
     * @var int
     */
    private $truck = 0;

    public function __construct(string $color, int $nbSeats, string $energy, string $loadSize)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->loadSize = $loadSize;
    }

    public function isTruckFull(): string
    {
        if ($this->truck < $this->loadSize) {
            $truckCheck = "in filling";
        } else {
            $truckCheck = "full";
        }
        return $truckCheck;
    }

    public function getLoadSize(): int
    {
        return $this->loadSize;
    }

    public function setLoadSize($loadSize): void
    {
        $this->loadSize = $loadSize;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, Car::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getTruck(): int
    {
        return $this->truck;
    }

    public function setTruck(int $truck): void
    {
        $this->truck = $truck;
    }
}

