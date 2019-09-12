<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Departments;

final class Programmer implements Employee
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function paySalary()
    {
        // TODO: Implement paySalary() method.
    }

    public function dismiss()
    {
        // TODO: Implement dismiss() method.
    }
}
