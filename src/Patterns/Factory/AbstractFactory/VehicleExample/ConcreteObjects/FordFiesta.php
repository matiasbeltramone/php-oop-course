<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\CarInterface;

final class FordFiesta implements CarInterface
{
    public function run(): void
    {
        echo 'FordFiesta Car is running...';
    }
}
