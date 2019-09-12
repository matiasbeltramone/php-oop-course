<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteObjects;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ObjectInterface\CarInterface;

final class ChevroletMalibu implements CarInterface
{
    public function run(): void
    {
         echo 'Chevrolet Malibu Car is running...';
    }
}
