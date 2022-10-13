<?php
interface Db{
    public function conn():string;
}

class Mysql implements Db {
    public function conn(): string
    {
        return 'conn mysql';
    }
}

class Sqlite implements Db{
    public function conn(): string
    {
        return 'conn Sqlite';
    }
}

class simpleFactory{
    public static function creatDb($type): mixed
    {
        $type = strtoupper($type);
        $conn = match($type){
            'MYSQL' => function(){return (new Mysql());},
            'SQLITE' => function(){return (new Sqlite());},
            default => function(){return null;},
        };

        return $conn();

    }
}
$obj = simpleFactory::creatDb('sqlite');
if(is_object($obj)){
    var_dump($obj->conn());
}else{
    throw new \Exception('not found');
}