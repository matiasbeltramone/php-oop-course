<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\SimpleFactory;

use DateTimeImmutable;
use Exception;
use Rooftop\PhpBootstrap\Domain\Entities\Customer;
use Rooftop\PhpBootstrap\Domain\Entities\Invoice;
use Rooftop\PhpBootstrap\Domain\Entities\Order;

/**
 * Class InvoiceFactory
 * @package Rooftop\PhpBootstrap\Patterns\Factory\SimpleFactory
 * Typically, the type of factory we created above is called a Simple Factory. A simple factory is a
 * class responsible for creating another object.
 */
final class InvoiceFactory
{
    /**
     * @param Order $order
     * @return Invoice
     * @throws Exception
     */
    public function createFromOrder(Order $order): Invoice
    {
        $invoice = new Invoice();

        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new DateTimeImmutable());
        $invoice->setTotal($order->getTotal());

        return $invoice;
    }

    /**
     * @param Customer $customer
     * @param Order $order
     * @return Invoice
     * @throws Exception
     */
    public function createFromCustomerAndOrder(Customer $customer, Order $order): Invoice
    {
        $invoice = new Invoice();

        $invoice->setCustomer($customer);
        $invoice->setOrder($order);
        $invoice->setInvoiceDate(new DateTimeImmutable());
        $invoice->setTotal($order->getTotal());

        return $invoice;
    }
}
