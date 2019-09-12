<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Contracts;

use Rooftop\PhpBootstrap\Domain\Entities\Invoice;

interface InvoiceDeliveryInterface
{
    public function send(Invoice $invoice): void;
}
