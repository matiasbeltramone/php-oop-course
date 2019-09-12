<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Adapter;

final class WalkingDistance implements DistanceInterface
{
    public function getDistance($from, $to): float
    {
        $api = new GoogleMapsApi();

        $directions = $api->getWalkingDirections($from, $to);

        return $directions->getTotalDistance();
    }
}
