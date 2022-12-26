<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Door;
use DesignPatterns\Creational\Builder\Parts\Engine;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\Parts\Vehicle;
use DesignPatterns\Creational\Builder\Parts\Wheel;

class TrcukBuilder implements Builder
{
    private Truck $truck;

    public function addWheel(): void
    {
        $this->truck->setPart('wheelLF', new Wheel());
        $this->truck->setPart('wheelRF', new Wheel());
        $this->truck->setPart('wheelLR', new Wheel());
        $this->truck->setPart('wheelRR', new Wheel());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('Engine', new Engine());
    }

    public function addDoor(): void
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
        $this->truck->setPart('trunkLid', new Door());
    }

    public function createVehicle(): void
    {
        $this->truck = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
