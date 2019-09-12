<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\Conceptual;

final class Context
{
    /** @var Strategy $strategy */
    private $strategy;

    public function setStrategy(Strategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function executeStrategy(int $a, int $b)
    {
        return $this->strategy->execute($a, $b);
    }
}
