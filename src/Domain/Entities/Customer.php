<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Domain\Entities;

final class Customer
{
    private $name;
    private $email;
    private $limit;
    private $status;
    private $accountManager;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function setCreditLimit(float $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function setAccountManager(AccountManager $accountManager): self
    {
        $this->accountManager = $accountManager;
        return $this;
    }

    public function getDeliveryMethod(): string
    {
        return 'email';
    }
}
