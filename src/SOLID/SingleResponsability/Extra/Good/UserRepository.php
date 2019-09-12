<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Good;

/*
 * When we look at the UserRepository class, we can make a determination that retrieving and
 * persisting data to the database are the same responsibility, as a change to one (such as changing
 * where or how the data is stored) requires a change to the other.
 */
final class UserRepository
{
    public function find($id) {}
    public function save(User $user) {}
}
