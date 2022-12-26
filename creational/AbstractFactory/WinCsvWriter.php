<?php

declare(strict_types=1);
/**
 * learn php design patterns
 * phpsarc@gmail.com
 */
namespace DesignPatterns\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{
    public function write(array $line): string
    {
        return join(',', $line) . "\r\n";
    }
}
