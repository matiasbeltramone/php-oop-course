<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\InterfaceSegregation\Extra\Bad;

class FileLogger implements LoggerInterface
{
    protected $file;

    public function __construct($file)
    {
        $this->file = new \SplFileObject($file);
    }

    public function write($message)
    {
        $this->file->fwrite($message);
    }

    public function read($messageCount)
    {
        $lines = 0;
        $contents = [];

        while (!$this->file->eof()
            && $lines < $messageCount) {
            $contents[] = $this->file->fgets();
            $lines++;
        }

        return $contents;
    }
}
