<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Adapter\RealWorld;

final class BillsGeocoderAdapter implements GeocoderInterface
{
    protected $geocoder;

    public function __construct(BillsGeocoder $geocoder)
    {
        $this->geocoder = $geocoder;
    }

    public function geocode($address)
    {
        return $this->geocoder->geocode($address);
    }
}
