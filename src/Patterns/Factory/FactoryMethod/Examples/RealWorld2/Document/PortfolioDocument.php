<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Document;

use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Page\PageInterface;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Page\PortfolioPage;

class PortfolioDocument extends AbstractDocument
{
    public function createPage(): PageInterface
    {
        return new PortfolioPage();
    }
}
