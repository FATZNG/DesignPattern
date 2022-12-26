<?php
declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory;
class LinuxCvsWriter implements CvsWriter{
    public function writer(array $data):string{
        return join(',',$data).PHP_EOL;
    }
}