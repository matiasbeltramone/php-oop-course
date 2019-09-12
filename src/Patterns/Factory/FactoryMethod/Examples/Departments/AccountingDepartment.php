<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Departments;

class AccountingDepartment extends Department
{
    public function createEmployee($id): Employee
    {
        return new Accountant($id);
    }
}
