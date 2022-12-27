<?php
namespace DesignPatterns\Structural\DenpendencyInjection\Test;

use DesignPatterns\Structural\DenpendencyInjection\DbConfig;
use DesignPatterns\Structural\DenpendencyInjection\DbConn;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase{
    public function testDependencyInjection()
    {
        $config = new DbConfig('localhost', 3306, 'domnikl', '1234');
        $connection = new DbConn($config);

        $this->assertSame('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}