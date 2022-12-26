<?php

declare(strict_types=1);
/**
 * learn php design patterns
 * phpsarc@gmail.com
 */
final class sigleton
{
    private static $instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public function getInstance(): sigleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return new self();
    }
}
