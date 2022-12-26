<?php
declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory\Tests;

use Designpatten\creational\abstractFactory\CvsWriter;
use Designpatten\creational\abstractFactory\JsonWriter;
use Designpatten\creational\abstractFactory\LinuxWriterFactory;
use Designpatten\creational\abstractFactory\UinxWriterFactory;
use Designpatten\creational\abstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFatoryTestCase extends TestCase{
    public function provideFactory()
    {
        return [
            [new UinxWriterFactory()],
            [new LinuxWriterFactory()]
        ];
    }

    /**
     * @dataProvider provideFactory
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory)
    {
        $this->assertInstanceOf(JsonWriter::class,$writerFactory->createJsonWriter());
        $this->assertInstanceOf(CvsWriter::class,$writerFactory->createCvsWriter());
    }
}