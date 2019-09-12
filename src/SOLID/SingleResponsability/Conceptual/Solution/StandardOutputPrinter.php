<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Conceptual\Solution;

final class StandardOutputPrinter implements Printer
{
    public function printPage(string $page): void
    {
        echo $page;
    }
}
