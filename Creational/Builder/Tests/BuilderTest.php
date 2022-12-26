<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TrcukBuilder;
use PHPUnit\Framework\TestCase;

// require_once __DIR__ . '/..'.'/Parts/Car.php';
// require_once __DIR__ . '/..'.'/Parts/Truck.php';
// require_once __DIR__ . '/..'.'/Director.php';
// require_once __DIR__ . '/..'.'/TrcukBuilder.php';
// require_once __DIR__ . '/..'.'/TrcukBuilder.php';

/**
 * @internal
 * @coversNothing
 */
class BuilderTest extends TestCase
{
    public function testTruckBuilder()
    {
        $truckBuilder = new TrcukBuilder();
        $newVechile = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVechile);
    }

    public function testCarBuilder()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
