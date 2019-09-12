<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Page;

final class PortfolioPage implements PageInterface
{
    public function operation(): string
    {
        return "{Result of the PortfolioPage}";
    }
}
