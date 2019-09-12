<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Extra\Bad;

interface LogWriterInterface
{
    public function write($message);
}
