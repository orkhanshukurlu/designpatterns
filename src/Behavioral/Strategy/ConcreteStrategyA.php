<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);

        return $data;
    }
}