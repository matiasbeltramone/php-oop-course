<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\SingleResponsability\Extra\Good;

/*
 * Our four classes here represent the responsibilities of the previous InvoicingService class.
 * Ideally, we’d probably even have more than this: we’ll probably want strategy classes for each
 * format needed for the InvoiceGenerator and strategy classes for each delivery method of the
 * InvoiceDeliveryService . Otherwise, these classes end up having more than one responsibility
 * as they’re either generating multiple file formats, or utilizing multiple delivery methods.
 */
final class InvoiceGenerator
{
    public function createInvoiceFormat(
        Invoice $invoice,
        $format
    ) {}
}
