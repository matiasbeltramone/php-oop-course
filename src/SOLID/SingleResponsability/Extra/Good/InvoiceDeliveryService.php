<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Good;

final class InvoiceDeliveryService
{
    public function sendInvoice(
        Invoice $invoice,
        $method
    ) {}
}
