<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual\SolutionWithInterface;

interface Measurable
{
    public function getTotalLength();
    public function getSentLength();
}
