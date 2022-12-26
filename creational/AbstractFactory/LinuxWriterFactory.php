<?php
declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory;
class LinuxWriterFactory implements WriterFactory{
    public function createCvsWriter():CvsWriter{
        return new LinuxCvsWriter();
    }
    public function createJsonWriter():JsonWriter{
        return new LinuxJsonWriter();
    }
}