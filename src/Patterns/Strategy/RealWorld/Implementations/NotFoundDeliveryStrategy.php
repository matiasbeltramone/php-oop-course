<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Implementations;

use Rooftop\PhpBootstrap\Domain\Entities\Invoice;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Contracts\InvoiceDeliveryInterface;

final class NotFoundDeliveryStrategy implements InvoiceDeliveryInterface
{
    public function send(Invoice $invoice): void
    {
        // Empty implementation.
    }
}
