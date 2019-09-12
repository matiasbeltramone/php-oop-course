<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Conceptual\Solution;

final class Client
{
    public function __invoke()
    {
        $book = new Book();

        $currentPage = $book->getCurrentPage();

        $printer = new StandardOutputPrinter();

        $printer->printPage($currentPage);
    }
}
