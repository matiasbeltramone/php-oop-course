<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Conceptual\Solution;

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

    /*
     * La sutiliza es que ya no llamamos al canal de salida,
     * si no que devolvemos el texto en cuestion
    */
    public function getCurrentPage(): string
    {
        return "Current page content";
    }
}
