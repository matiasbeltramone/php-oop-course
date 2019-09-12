<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\SimpleFactory;

use Rooftop\PhpBootstrap\Domain\Entities\Customer;

final class CustomerStaticFactory
{
    /**
     *  For simple factories, there’s
     *  probably no negatives to doing so. For involved factories, especially those with dependencies
     *  like CustomerFactory that has AccountManagerRepository how dependency, it
     *  can lead to some pretty smelly code.
     * @param $name
     * @return Customer
     */
    public static function createCustomer(string $name): Customer
    {
        $customer = new Customer();

        $customer->setName($name);
        $customer->setCreditLimit(0);
        $customer->setStatus('pending');

        return $customer;
    }
}
