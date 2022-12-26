<?php
declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory;
interface CvsWriter
{
    public function writer(array $data):string;
}