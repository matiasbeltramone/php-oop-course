<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\CarInterface;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\TruckInterface;

interface AssemblyLineInterface
{
    public function createCar(): CarInterface;

    public function createTruck(): TruckInterface;
}
