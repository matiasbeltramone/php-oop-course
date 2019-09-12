<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Adapter;

interface DistanceInterface
{
    public function getDistance($from, $to): float;
}
