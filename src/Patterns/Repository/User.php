<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Repository\Retrieval;

final class User
{
    private $name;

    public function getId()
    {
        return 1;
    }

    public function getName(): string
    {
        return 'Matías Beltramone';
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
