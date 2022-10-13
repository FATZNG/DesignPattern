<?php
declare(strict_types=1);
final class sigleton
{
    private static $instance = null;

    public function getInstance(): sigleton
    {
        if (self::$instance === null){
            self::$instance = new self();
        }
        return new self();

    }

    private function __clone(){}
    private function __wakeup(){}
    private function __construct(){}
}