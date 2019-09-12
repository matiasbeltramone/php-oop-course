<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\Liskov;

class SpanishHello implements HelloInterface
{
    public function getHello()
    {
        return "Hola";
    }
}
