<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\GUIExample;

interface GUIFactory
{
    public function createButton(): Button;
    public function createCheckbox(): Checkbox;
}
