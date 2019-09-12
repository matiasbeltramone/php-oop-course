<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Bad;

/*
 * This User class has two responsibilities: it manages the state of the user, and it manages the
 * retrieval from and persistence to the database. This violates SRP. Instead, we could refactor this
 * into two classes
 */
final class User
{
    public function getName() {}
    public function getEmail() {}
    public function setName(): void {}
    public function setEmail(): void {}

    public function find($id) {}
    public function save() {}
}
