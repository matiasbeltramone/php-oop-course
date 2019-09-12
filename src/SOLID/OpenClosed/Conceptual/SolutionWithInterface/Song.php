<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual\SolutionWithInterface;

final class Song implements Measurable
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
