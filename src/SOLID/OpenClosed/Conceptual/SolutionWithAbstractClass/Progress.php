<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual\SolutionWithAbstractClass;

final class Progress
{
    public function getSentLengthPercentage(Measurable $measurable)
    {
        return $measurable->getSentLengthPercentage();
    }
}
