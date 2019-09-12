<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Repository\Retrieval;

interface UserRepositoryInterface
{
    /* Retrieval methods */
    public function getById(int $id): User;
    public function findById(int $id): User;
    public function find(int $id): User;
    public function retrieve(int $id): User;

    public function getBy(array $conditions): User;
    public function getAll(): array;

    /* Persistence methods */
    public function persist(User $user);
    public function save(User $user);
}
