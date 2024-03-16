<?php

declare(strict_types=1);

namespace App\Creational\Singleton;

class Singleton
{
    private static array $instances = [];

    protected function __construct()
    {
        //
    }

    protected function __clone()
    {
        //
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;

        if (! isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function someBusinessLogic()
    {
        // ...
    }
}