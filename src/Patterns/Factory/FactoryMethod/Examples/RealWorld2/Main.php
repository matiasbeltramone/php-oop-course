<?php

use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Document\AbstractDocument;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Document\PortfolioDocument;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld2\Document\ResumeDocument;

/**
 * The client code works with an instance of a concrete creator, albeit through
 * its base interface. As long as the client keeps working with the creator via
 * the base interface, you can pass it any creator's subclass.
 * @param AbstractDocument $documentCreator
 */
function clientCode(AbstractDocument $documentCreator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $documentCreator->render();
    // ...
}

/**
 * The Application picks a creator's type depending on the configuration or
 * environment.
 */
echo "App: Launched with the ConcreteCreator1.\n";
clientCode(new PortfolioDocument());
echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";
clientCode(new ResumeDocument());

/*

Output:

App: Launched with the ConcreteCreator1.
Client: I'm not aware of the creator's class, but it still works.
Creator: The same creator's code has just worked with {Result of the ConcreteProduct1}

App: Launched with the ConcreteCreator2.
Client: I'm not aware of the creator's class, but it still works.
Creator: The same creator's code has just worked with {Result of the ConcreteProduct2}

 */
