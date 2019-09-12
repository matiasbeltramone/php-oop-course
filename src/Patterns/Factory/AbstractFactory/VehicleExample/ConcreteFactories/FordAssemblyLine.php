<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteFactories;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\AssemblyLineInterface;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects\FordF250;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects\FordFiesta;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\CarInterface;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\TruckInterface;

final class FordAssemblyLine implements AssemblyLineInterface
{
    public function createCar(): CarInterface
    {
        return new FordFiesta();
    }

    public function createTruck(): TruckInterface
    {
        return new FordF250();
    }
}
