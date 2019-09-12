<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ClientCode\Building;
use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ConcreteFactories\FordAssemblyLine;

/**
 * Class Main
 * @package Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory
 * The Abstract Factory pattern is useful when several different objects need to be created
 * independent from the system that creates them. If we’re only concerned with created one object,
 * then the Abstract Factory isn’t a very suitable solution.
 */
final class Main
{
    /*
        The Abstract Factory Pattern typically has several different players:

        1. Client Code, which is an object or code that needs to use the factory to create other objects
        2. Object Interface, which defines the structure of the actual objects to be created
        3. Concrete Objects, which implement the Object Interface with specific implementation
        details
        4. An Abstract Factory, which declares an interface to define how objects (Object Interfaces)
        should be created
        5. Concrete Factories, which implement the Abstract Factory interface and create specific
        types of objects (Concrete Objects)

        Primero: Crear interfaces para definir los objetos que queremos crear. (Object Interfaces)

        Segundo: Hora de definir implementaciones o clases concretas correspondientes a las lineas de ensamble
        que deseamos (Ford, Chevrolet) además de los dos tipos de vehiculos que queremos: Camiones y Autos (Concrete Obj)

        Tercero: Ahora necesitamos la linea de ensamblaje para crear los autos y camiones deseados. (Abstract Factory)

        Cuarto: Las implementaciones de la linea de ensamblaje anterior es decir nuestro Ford and Chevrolet assembly line
        (Concrete Factories)

        Quinto: Por ultimo la clase Building acepta cualquier linea de ensamblaje y actua de acuerdo a ello.
     */
    public function __invoke()
    {
        $building = new Building(new FordAssemblyLine());

        echo 'FordAssemblyLine execute';

        echo 'Assembly cars starting...';

        $building->createCars();

        echo 'Assembly cars finished...';

        echo 'Assembly trucks';

        $building->createTrucks();

        echo 'Assembly trucks finished...';
    }
}
