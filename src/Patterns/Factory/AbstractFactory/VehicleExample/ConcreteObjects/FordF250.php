<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\TruckInterface;

final class FordF250 implements TruckInterface
{
    public function run(): void
    {
        echo 'FordF250 Truck is running...';
    }
}
