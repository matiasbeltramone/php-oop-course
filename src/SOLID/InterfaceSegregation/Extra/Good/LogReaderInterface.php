<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Extra\Bad;

interface LogReaderInterface
{
    public function read($messageCount);
}
