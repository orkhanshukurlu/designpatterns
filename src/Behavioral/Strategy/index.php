<?php

use App\Behavioral\Strategy\ConcreteStrategyA;
use App\Behavioral\Strategy\ConcreteStrategyB;
use App\Behavioral\Strategy\Context;

$context = new Context(new ConcreteStrategyA());
echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reverse sorting.\n";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();