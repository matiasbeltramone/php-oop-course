<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Extra\Good;

interface LogManagerInterface
    extends LogReaderInterface, LogWriterInterface
{
}
