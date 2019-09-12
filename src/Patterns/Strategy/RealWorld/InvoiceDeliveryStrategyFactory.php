<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld;

use Rooftop\PhpBootstrap\Domain\Entities\Customer;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Contracts\InvoiceDeliveryInterface;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Implementations\EmailDeliveryStrategy;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Implementations\NotFoundDeliveryStrategy;
use Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld\Implementations\PrintDeliveryStrategy;

final class InvoiceDeliveryStrategyFactory
{
    public function create(Customer $customer): InvoiceDeliveryInterface
    {
        switch ($customer->getDeliveryMethod()) {
            case InvoiceDeliveryMethodTypes::EMAIL:
                return new EmailDeliveryStrategy();
                break;
            case InvoiceDeliveryMethodTypes::PRINT:
                return new PrintDeliveryStrategy();
                break;
            default:
                return new NotFoundDeliveryStrategy();
                break;
        }
    }
}
