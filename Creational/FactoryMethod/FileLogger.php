<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

class FileLOgger implements Logger
{
    public function __construct(private string $filepath)
    {
        $this->path = $filepath;
    }

    public function log($message)
    {
        \file_put_contents($this->path, $message . PHP_EOL);
    }
}
