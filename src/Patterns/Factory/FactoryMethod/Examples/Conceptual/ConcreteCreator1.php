<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual;

use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual\Product\ConcreteProduct1;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual\Product\ProductInterface;

/**
 * Concrete Creators override the factory method in order to change the
 * resulting product's type.
 */
final class ConcreteCreator1 extends Creator
{
    /**
     * Note that the signature of the method still uses the abstract product
     * type, even though the concrete product is actually returned from the
     * method. This way the Creator can stay independent of concrete product
     * classes.
     */
    public function factoryMethod(): ProductInterface
    {
        return new ConcreteProduct1();
    }
}
