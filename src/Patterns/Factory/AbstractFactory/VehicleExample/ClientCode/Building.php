<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\ClientCode;

use Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\AssemblyLineInterface;

final class Building
{
    private $assemblyLine;
    private $inventory = [];

    public function __construct(AssemblyLineInterface $assemblyLine)
    {
        $this->assemblyLine = $assemblyLine;
    }

    public function createCars(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $this->inventory[] = $this->assemblyLine->createCar();
        }
    }

    public function createTrucks(): void
    {
        for ($i = 0; $i < 15; $i++) {
            $this->inventory[] = $this->assemblyLine->createTruck();
        }
    }
}
