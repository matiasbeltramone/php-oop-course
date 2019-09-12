<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\TruckInterface;

final class ChevroletSilverado implements TruckInterface
{
    public function run(): void
    {
        echo 'Chevrolet Silverado Truck is running...';
    }
}
