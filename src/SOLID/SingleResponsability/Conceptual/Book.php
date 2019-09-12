<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Conceptual;

final class Book
{
    public function getTitle(): string
    {
        return "A great book";
    }

    public function getAuthor(): string
    {
        return "John Foo";
    }

    public function printCurrentPage(): void
    {
        echo "Current page content";
    }
}
