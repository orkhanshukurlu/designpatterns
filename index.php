<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

if ('cli' !== PHP_SAPI) {
    throw new RuntimeException('This project must be run only in the terminal');
}

// Strategy design pattern
require_once __DIR__ . '/src/Behavioral/Strategy/index.php';