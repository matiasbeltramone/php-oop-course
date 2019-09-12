<?php
declare(strict_types=1);

namespace Rooftop\PhpBootstrap\Patterns\Strategy\Conceptual;

final class Main
{
    private $context;

    public function __construct(Context $context)
    {
        $this->context = $context;
    }

    public function execute(Calculator $calculator)
    {
        if ($calculator->getAction() == 'addition') {
            $this->context->setStrategy(new ConcreteStrategyAdd());
        }

        if ($calculator->getAction() == 'subtraction') {
            $this->context->setStrategy(new ConcreteStrategySubtract());
        }

        if ($calculator->getAction() == 'multiplication') {
            $this->context->setStrategy(new ConcreteStrategyMultiply());
        }

        return $this->context->executeStrategy(10, 20);
    }
}
