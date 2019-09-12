<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\Liskov;

class FrenchHello implements HelloInterface
{
    public function getHello()
    {
        return "Bonjour";
    }
}
