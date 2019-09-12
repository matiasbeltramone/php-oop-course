<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Good;

interface OrderRepository
{
    public function getOrdersByMonth($month);
}
