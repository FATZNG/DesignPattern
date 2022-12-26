<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoor();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
