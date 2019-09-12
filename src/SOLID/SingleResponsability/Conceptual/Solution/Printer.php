<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Conceptual\Solution;

interface Printer
{
    /*
     * Al poner una firma void estamos diciendo que producimos un side effect:
     *      -Guardar en base de datos
     *      -Escribir un fichero
     *      -Mostrar algo en consola
     *      -Realizar una impresión
     *      -etc...
    */
    public function printPage(string $page): void;
}
