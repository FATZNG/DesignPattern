<?php
namespace DesignPatterns\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory{
    public function __construct(private string $path)
    {
        
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->path);
    }
}