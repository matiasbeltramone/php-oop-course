<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\GUIExample;

final class MacFactory implements GUIFactory
{
    public function createButton(): Button
    {
        return new MacButton();
    }

    public function createCheckbox(): Checkbox
    {
        return new MacCheckbox();
    }
}
