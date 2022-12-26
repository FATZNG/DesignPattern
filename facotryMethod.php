<?php

declare(strict_types=1);
/**
 * learn php design patterns
 * phpsarc@gmail.com
 */
// 符合开闭原则：对修改封闭，对扩展开放
// 参找简单工厂模式
interface db
{
    public function conn();
}

interface dbFactory
{
    public function createDb();
}

class mysqlDb implements db
{
    public function conn()
    {
        return self::class . 'conn';
    }
}

class sqliteDb implements db
{
    public function conn()
    {
        return self::class . 'conn';
    }
}

class mysqlFacotory implements dbFactory
{
    public function createDb()
    {
        return new mysqlDb();
    }
}

class sqliteFactory implements dbFactory
{
    public function createDb()
    {
        return new sqliteDb();
    }
}

echo (new mysqlFacotory())->createDb()->conn() . PHP_EOL;
echo (new sqliteFactory())->createDb()->conn() . PHP_EOL;

// 比如新增了mongodb，只需要实现db和factory接口

class mongodb implements db
{
    public function conn()
    {
        return self::class . 'conn';
    }
}

class mongodbFactory implements dbFactory
{
    public function createDb()
    {
        return new mongodb();
    }
}
