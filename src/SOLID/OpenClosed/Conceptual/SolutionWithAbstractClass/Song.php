<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual\SolutionWithAbstractClass;

final class Song extends Measurable
{
    private $totalLength;
    private $sentLength;

    public function getTotalLength()
    {
        return $this->totalLength;
    }

    public function getSentLength()
    {
        return $this->sentLength;
    }
}
