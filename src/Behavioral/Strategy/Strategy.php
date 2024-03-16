<?php

declare(strict_types=1);

namespace App\Behavioral\Strategy;

interface Strategy
{
    public function doAlgorithm(array $data): array;
}