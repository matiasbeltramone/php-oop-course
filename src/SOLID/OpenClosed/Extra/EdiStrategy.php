<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Extra;

use Rooftop\PhpBootstrap\Domain\Entities\Invoice;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Contracts\InvoiceDeliveryInterface;

/*
 * Now the invoice process has the ability to deliver invoices via EDI without us having to make
 * modifications to the actual invoicing code
 */
final class EdiStrategy implements InvoiceDeliveryInterface {
    public function send(Invoice $invoice): void {
        // Use an Electronic Data Interchange library to send this invoice
    }
}
