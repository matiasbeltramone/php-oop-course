<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Departments;

class ITDepartment extends Department
{
    public function createEmployee($id): Employee
    {
        return new Programmer($id);
    }
}
