<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual\SolutionWithInterface;

final class Progress
{
    public function getSentLengthPercentage(Measurable $measurable)
    {
        return ($measurable->getSentLength() * 100) / $measurable->getTotalLength();
    }
}
