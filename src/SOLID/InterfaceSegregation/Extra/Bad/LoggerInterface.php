<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Extra\Bad;

interface LoggerInterface
{
    public function write($message);

    public function read($messageCount);
}
