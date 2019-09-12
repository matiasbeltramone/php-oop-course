<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\FactoryMethod\Examples\Departments;

interface Employee
{
    public function paySalary();
    public function dismiss();
}
