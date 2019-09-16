<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\Katas\GildedRose;

final class Item
{
    public $name;
    public $sell_in;
    public $quality;

    function __construct($name, $sell_in, $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString()
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }
}
