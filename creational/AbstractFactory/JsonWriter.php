<?php

declare(strict_types=1);
/**
 * learn php design patterns
 * phpsarc@gmail.com
 */
namespace DesignPatterns\Creational\AbstractFactory;

interface JsonWriter
{
    public function write(array $data, bool $formatted): string;
}
