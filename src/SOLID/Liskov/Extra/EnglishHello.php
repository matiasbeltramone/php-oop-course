<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\Liskov;

class EnglishHello implements HelloInterface
{
    public function getHello()
    {
        return "Hello";
    }
}
