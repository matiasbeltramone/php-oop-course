<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteFactories;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\AssemblyLineInterface;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects\ChevroletMalibu;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects\ChevroletSilverado;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\CarInterface;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\TruckInterface;

final class ChevroletAssemblyLine implements AssemblyLineInterface
{
    public function createCar(): CarInterface
    {
        return new ChevroletMalibu();
    }

    public function createTruck(): TruckInterface
    {
        return new ChevroletSilverado();
    }
}
