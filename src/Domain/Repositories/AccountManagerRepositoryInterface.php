<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Domain\Repositories;

use Rooftop\PhpBootstrap\Domain\Entities\AccountManager;

interface AccountManagerRepositoryInterface
{
    public function getRandom(): AccountManager;
}
