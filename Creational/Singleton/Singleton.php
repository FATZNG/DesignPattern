<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\Singleton;

class Singleton
{
    protected static ?Singleton $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public function getInstance(): Singleton
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
