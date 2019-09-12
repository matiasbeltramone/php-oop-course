<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\RealWorld;

final class InvoiceServices
{
    private $orderRepository;
    private $invoiceFactory;
    private $deliveryMethodFactory;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        InvoiceFactory $invoiceFactory,
        InvoiceDeliveryStrategyFactory $deliveryStrategyFactory
    ) {
        $this->orderRepository = $orderRepository;
        $this->invoiceFactory = $invoiceFactory;
        $this->deliveryMethodFactory = $deliveryStrategyFactory;
    }

    public function invoiceCustomers(array $customers): void {
        foreach ($customers as $customer) {
            $invoice = $this->invoiceFactory->createFromCustomerAndOrder(
                $customer,
                $this->orderRepository->getByCustomer($customer)
            );

            $strategy = $this->deliveryMethodFactory->create($customer);

            $strategy->send($invoice);
        }
    }
}
