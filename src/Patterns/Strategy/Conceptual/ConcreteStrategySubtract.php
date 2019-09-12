<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\Conceptual;

final class ConcreteStrategySubtract implements Strategy
{
    public function execute($a, $b)
    {
        return $a - $b;
    }
}
