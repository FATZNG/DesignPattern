<?php
namespace DesignPatterns\Creational\FactoryMethod;

class StdoutLogger implements Logger{
    public function log(mixed $message):mixed{
        return $message;
    }
}