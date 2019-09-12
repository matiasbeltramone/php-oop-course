<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Application\Services;

/*
 * En este caso al ver la cabecera del caso de uso ya veo con quien se relaciona
 * inmediatamente, en este caso con el UserWriter.
 * Con la forma estatica por el contrario se encuentra escondido dentro de la clase.
 */
final class RegisterUserUseCase
{
    private $userWriter;

    public function __construct(UserWriter $userWriter)
    {
        $this->userWriter = $userWriter;
    }

    public function __invoke($email, $password, $birthDay)
    {
        $user = User::register($email, $password, $birthDay);

        $this->userWriter->saveUser($user);
    }
}
