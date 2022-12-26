<?php
declare(strict_types = 1);
namespace Designpatten\creational\abstractFactory;
class UinxWriterFactory implements WriterFactory{
   public function createCvsWriter(): CvsWriter
   {
        return new UnixCvsWriter();
   } 

   public function createJsonWriter(): JsonWriter
   {
        return new UnixJsonWriter();
   }
}