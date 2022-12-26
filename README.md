# 设计模式

## 单例模式

```php
<?php
//只能实例化一个：
class singleton{
    public function singleton(){
        return new self();
    }
}
```

这个时候呢，不能被成为单例模式，因为任何人都可以去继承，修改它

```php
<?php
class singletone{
    public function singleton(){
        return new self();
    }
    
    private function __construct(){}
}

```
因为每次new sigleton都会访问 __constrcut,所以封闭它

```php
<?php
class singleton{
    public function singleton(){
        return new self();
    }
    private function __construct() {}
}

class singleton2 extends singleton{
    public function __construct(){}
}
```

好了，现在继承之后，重写父级方法，修改访问修饰符，又可以new了

```php
<?php
final class singleton{
    public function singleton(){
        return new self();
    }
    private function __construct() {}
}
```
现在好了，继承也不能修改这个类了，因为被声明为了final类，但是还是可以克隆。
比如说

```php
<?php
$str = new singleton();
$str2 = clone $str;
```
这时也是一样的相当于不是单例模式

```php
<?php
class singleton{
    public function singleton(){
        return new self();
    }
    private function __construct() {}
    private function __clone(){}
}
```

禁止克隆，但是还是有个问题。因为每次实例化singleton都是新的实例化。所以

```php
<?php
class singleton{
    protected static $instance = null;
    public function singleton(){
        if(self::$instance === null){
            self::$instance = new self();
        } 
        return self::$instance;
    }
    private function __construct() {}
    private function __clone(){}
}
```
