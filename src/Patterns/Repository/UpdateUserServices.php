<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Repository;

use Rooftop\PhpBootstrap\Patterns\Repository\Retrieval\UserRepositoryInterface;

final class UpdateUserServices
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(int $id): void
    {
        $user = $this->userRepository->getById($id);

        $user->setName('New user name');

        $this->userRepository->persist($user);
    }
}
