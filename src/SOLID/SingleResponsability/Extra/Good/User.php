<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Good;

/*
 * The User class continues to manage the state of the user data, but now the UserRepository class
 * is responsible for managing the retrieval and persistence to the database. These two concepts are
 * now decoupled, and the two classes conform to SRP.
 */
final class User
{
    public function getName() {}
    public function getEmail() {}
}
