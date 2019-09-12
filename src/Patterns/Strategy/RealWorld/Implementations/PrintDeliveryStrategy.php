<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Implementations;

use Rooftop\PhpBootstrap\Domain\Entities\Invoice;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Contracts\InvoiceDeliveryInterface;

class PrintDeliveryStrategy implements InvoiceDeliveryInterface
{
    public function send(Invoice $invoice): void
    {
        // Send it to the printer
    }
}
