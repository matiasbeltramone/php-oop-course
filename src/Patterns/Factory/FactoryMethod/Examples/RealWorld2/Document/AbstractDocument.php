<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Document;

use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Page\PageInterface;

abstract class AbstractDocument
{
    abstract public function createPage(): PageInterface;

    public function render()
    {
        echo 'Page render successful: ' . $this->addPage(1, $this->createPage());
    }

    private function addPage(int $value, PageInterface $page)
    {
        return true;
    }
}
