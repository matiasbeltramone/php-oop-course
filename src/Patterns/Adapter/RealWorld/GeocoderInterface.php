<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Adapter\RealWorld;

interface GeocoderInterface
{
    public function geocode($address);
}
