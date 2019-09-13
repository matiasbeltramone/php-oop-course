<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\SOLID\DependencyInversion\Extra;

/* High Level Class */
final class GameManager
{
    protected $input;
    protected $video;

    /*
     * This GameManager class is depending strongly on two low level classes: KeyboardInput and
     * ScreenOutput . This presents a problem in that, if we ever want to change how input or output
     * are handled in this class, such as switching to a joystick or terminal output, or switch platforms
     * entirely, we can’t. We have a hard dependency on these two classes.
     */
    public function __construct()
    {
        /* Start Low Level Class */
        $this->input = new KeyboardInput();
        $this->video = new ScreenOutput();
        /* End Low Level Class */
    }

    public function run()
    {
        // accept user input from $this->input
        // draw the game state on $this->video
    }
}
