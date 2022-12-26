<?php
declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory;
class LinuxJsonWriter implements JsonWriter
{
    public function writer(array $data):string{
        return json_encode($data);
    }
}