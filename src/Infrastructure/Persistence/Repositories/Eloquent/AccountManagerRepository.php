<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Infrastructure\Persistence\Repositories\Eloquent;

use Rooftop\PhpBootstrap\Domain\Entities\AccountManager;
use Rooftop\PhpBootstrap\Domain\Repositories\AccountManagerRepositoryInterface;

final class AccountManagerRepository implements AccountManagerRepositoryInterface
{
    public function getRandom(): AccountManager
    {
        return new AccountManager();
    }
}
