<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\OpenClosed\Conceptual\SolutionWithAbstractClass;

abstract class Measurable {
    abstract function getTotalLength();
    abstract function getSentLength();

    public function getSentLengthPercentage() {
        return ($this->getSentLength() * 100) / $this->getTotalLength();
    }
}
