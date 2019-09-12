<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual;

use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual\Product\ConcreteProduct2;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual\Product\ProductInterface;

final class ConcreteCreator2 extends Creator
{
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct2();
    }
}
