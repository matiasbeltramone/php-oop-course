<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld;

use MyCLabs\Enum\Enum;

final class InvoiceDeliveryMethodTypes extends Enum
{
    const EMAIL = 'email';
    const PRINT = 'print';
}
