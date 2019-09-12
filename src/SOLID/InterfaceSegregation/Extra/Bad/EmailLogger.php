<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Extra\Bad;

final class EmailLogger implements LoggerInterface
{
    protected $address;

    public function __construct($address)
    {
        $this->address = $address;
    }

    public function write($message)
    {
        // hopefully something better than this:
        mail($this->address, 'Alert!', $message);
    }

    public function read($messageCount)
    {
        // hmm...
    }
}
