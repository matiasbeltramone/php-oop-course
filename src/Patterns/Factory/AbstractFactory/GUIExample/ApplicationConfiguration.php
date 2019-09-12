<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Factory\AbstractFactory\GUIExample;

final class ApplicationConfiguration
{
    public function __invoke()
    {
        $config = readApplicationConfigFile();

        if ($config['OS'] === 'Windows') {
            $factory = new WindowsFactory();
        } elseif ($config['OS'] === 'Mac') {
            $factory = new MacFactory();
        } else {
            throw new Exception('Error! Unknown operating system.');
        }

        $app = new Application($factory);

        //...

        $app->createUI();
        $app->paint();
    }
}
