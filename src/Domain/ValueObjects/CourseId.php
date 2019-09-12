<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Domain\ValueObjects;

final class CourseId
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function value()
    {
        return $this->value;
    }
}
