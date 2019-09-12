<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Domain\Entities;

use DateTimeImmutable;

final class Invoice
{
    private $order;
    private $invoiceDate;
    private $total;
    private $customer;

    public function getOrder(): Order
    {
        return $this->order;
    }

    public function setOrder(Order $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function getInvoiceDate(): DateTimeImmutable
    {
        return $this->invoiceDate;
    }

    public function setInvoiceDate(DateTimeImmutable $invoiceDate): self
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;
        return $this;
    }
}
