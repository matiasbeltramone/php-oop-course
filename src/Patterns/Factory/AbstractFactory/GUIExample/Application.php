<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\GUIExample;

final class Application
{
    /** @var GUIFactory */
    private $factory;
    /** @var Button */
    private $button;

    public function __construct(GUIFactory $factory)
    {
        $this->factory = $factory;
    }

    public function createUI()
    {
        $this->button = $this->factory->createButton();
    }

    public function paint()
    {
        $this->button->paint();
    }
}
