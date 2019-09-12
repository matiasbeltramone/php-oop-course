<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Application\Services;

/*
 * Una de las contras de los metodos estaticos es el alto acoplamiento que nos suele dejar
 * como consecuencia de que al utilizar el caso de uso ya nos hace el "new" de los objetos referenciados
 */
final class RegisterUserStaticUseCase
{
    public function __invoke($email, $password, $birthDay)
    {
        $user = User::register($email, $password, $birthDay);

        MySqlUserWriter::saveUser($user);
    }
}
