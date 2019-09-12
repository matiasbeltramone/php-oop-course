<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\Liskov;

class Greeter
{
    public function sayHello(HelloInterface $hello)
    {
        echo $hello->getHello() . "!\n";
    }
}

$greeter = new Greeter();
$greeter->sayHello(new EnglishHello());
$greeter->sayHello(new SpanishHello());
$greeter->sayHello(new FrenchHello());
