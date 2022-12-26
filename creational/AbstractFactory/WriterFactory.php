<?php

declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory;
/**
 * writer factory define what method need achieved;
 * 定义了需要实现的方法
 */
interface WriterFactory
{
    public function createCvsWriter():CvsWriter;
    public function createJsonWriter():JsonWriter; 
}