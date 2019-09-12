<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Implementations;

use Rooftop\PhpBootstrap\Domain\Entities\Invoice;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Contracts\InvoiceDeliveryInterface;

final class EmailDeliveryStrategy implements InvoiceDeliveryInterface
{
    public function send(Invoice $invoice): void
    {
        // Use an email library to send it like Mandrill/Mailchimp/Sengrid/Sendinblue/Mailgun.
    }
}
