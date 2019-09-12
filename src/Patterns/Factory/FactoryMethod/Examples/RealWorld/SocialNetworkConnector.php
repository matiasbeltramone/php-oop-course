<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\RealWorld;

/**
 * The Product interface declares behaviors of various types of products.
 */
interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}
