<?php

namespace RefactoringGuru\FactoryMethod\RealWorld;

use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld\FacebookPoster;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld\LinkedInPoster;
use Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld\SocialNetworkPoster;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
 * @param SocialNetworkPoster $creator
 */
function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
 */
echo "Testing ConcreteCreator1:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing ConcreteCreator2:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));

/*
Output message:

Testing ConcreteCreator1:
Send HTTP API request to log in user john_smith with password ******
Send HTTP API requests to create a post (Hello World!) in Facebook timeline.
Send HTTP API request to log out user john_smith

Send HTTP API request to log in user john_smith with password ******
Send HTTP API requests to create a post (I had a large hamburger this morning!) in Facebook timeline.
Send HTTP API request to log out user john_smith


Testing ConcreteCreator2:
Send HTTP API request to log in user john_smith@example.com with password ******
Send HTTP API requests to create a post (Hello World!) in LinkedIn timeline.
Send HTTP API request to log out user john_smith@example.com

Send HTTP API request to log in user john_smith@example.com with password ******
Send HTTP API requests to create a post (I had a large hamburger this morning!) in LinkedIn timeline.
Send HTTP API request to log out user john_smith@example.com

 */
