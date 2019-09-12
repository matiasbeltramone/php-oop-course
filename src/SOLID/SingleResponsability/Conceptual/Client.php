<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Conceptual;

final class Client
{
    public function __invoke()
    {
        $book = new Book();

        $book->printCurrentPage();
    }
}
