<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual\Product;

/**
 * Concrete Products provide various implementations of the Product interface.
 */
final class ConcreteProduct1 implements ProductInterface
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct1}";
    }
}
