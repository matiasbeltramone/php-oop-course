<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual;

final class File
{
    private $totalLength;
    private $sentLength;

    public function getSentLengthPercentage(): float {
        return ($this->sentLength * 100) / $this->totalLength;
  }
}
