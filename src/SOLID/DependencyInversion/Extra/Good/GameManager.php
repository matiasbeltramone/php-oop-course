<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\DependencyInversion\Extra\Good;

final class GameManager
{
    protected $input;
    protected $video;

    public function __construct(
        InputInterface $input,
        OutputInterface $output
    ) {
        $this->input = $input;
        $this->video = $output;
    }

    public function run()
    {
        // accept user input from $this->input
        // draw the game state on $this->video
    }
}
