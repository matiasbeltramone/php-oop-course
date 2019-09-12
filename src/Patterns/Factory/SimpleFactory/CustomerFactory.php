<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\SimpleFactory;

use Rooftop\PhpBootstrap\Domain\Entities\Customer;
use Rooftop\PhpBootstrap\Domain\Repositories\AccountManagerRepositoryInterface;

/**
 * Class CustomerFactory
 * @package Rooftop\PhpBootstrap\Patterns\Factory\SimpleFactory
 * Typically, the type of factory we created above is called a Simple Factory. A simple factory is a
 * class responsible for creating another object.
 */
final class CustomerFactory
{
    private $accountManagerRepository;

    /**
     * CustomerFactory constructor.
     * @param AccountManagerRepositoryInterface $repo
     */
    public function __construct(AccountManagerRepositoryInterface $repo)
    {
        $this->accountManagerRepository = $repo;
    }

    /**
     * @param $name
     * @return Customer
     */
    public function createCustomer(string $name): Customer
    {
        $customer = new Customer();

        $customer->setName($name);
        $customer->setCreditLimit(0);
        $customer->setStatus('pending');
        $customer->setAccountManager($this->accountManagerRepository->getRandom());

        return $customer;
    }
}
