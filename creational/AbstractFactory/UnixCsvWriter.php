<?php

declare(strict_types=1);
/**
 * learn php design patterns
 * phpsarc@gmail.com
 */
namespace DesignPatterns\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }
}
