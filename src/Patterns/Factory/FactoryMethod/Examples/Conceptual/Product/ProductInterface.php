<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Conceptual\Product;

/**
 * The Product interface declares the operations that all concrete products must
 * implement.
 */
interface ProductInterface
{
    public function operation(): string;
}
