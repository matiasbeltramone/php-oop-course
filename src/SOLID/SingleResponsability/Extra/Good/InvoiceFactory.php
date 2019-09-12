<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Good;

final class InvoiceFactory
{
    public function createInvoice(Order $order) {}
}
