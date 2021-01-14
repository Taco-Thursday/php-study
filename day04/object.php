<?php
// class A
// {
//     function foo()
//     {
//         if (isset($this)) {
//             echo '$this is defined (';
//             echo get_class($this);
//             echo ")\n";
//         } else {
//             echo "\$this is not defined.\n";
//         }
//     }
// }

// class B
// {
//     function bar()
//     {
//         A::foo();
//     }
// }

// $a = new A();
// $a->foo();

// A::foo();

// $b = new B();
// $b->bar();

// B::bar();

// $instance = new SimpleClass();

// 也可以这样做：
$className = 'Foo';
// $instance = new $className(); // Foo()
class SimpleClass {
    public $username = 1;
}
$instance = new SimpleClass();

$assigned   =  $instance;
$reference  =& $instance;

$instance->var = '$assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
var_dump($reference);
var_dump($assigned);

class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1);
var_dump($obj2);
var_dump($obj1 !== $obj2);
$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);
$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
echo (new DateTime())->format('Y');
class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar, PHP_EOL, $obj->bar(), PHP_EOL;
class Foo1
{
    public $bar;
    
    public function __construct() {
        $this->bar = function() {
            return 42;
        };
    }
}

$obj = new Foo1();
echo ($obj->bar)(), PHP_EOL;
class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class\n";
        // parent::displayVar();
    }
}

$extended = new ExtendClass();
echo $extended->username;
// namespace NS {
//     class ClassName {
//     }
    
//     echo ClassName::class;
// }

class MyClass
{
    const constant = 'constant value';

    function showConstant() {
        echo  self::constant . "\n";
    }
}

echo MyClass::constant . "\n";
$class = new MyClass();
$class->showConstant();

echo $class::constant."\n"; // 自 PHP 5.3.0 起
spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
});

$obj  = new Foo();
var_dump($obj);
spl_autoload_register(function ($name) {
    var_dump($name);
});

// class Foo3 implements ITest {
// }
class NonLoadableClass{

}
spl_autoload_register(function ($name) {
    echo "Want to load $name.\n";
    throw new Exception("Unable to load $name.");
});

try {
    $obj = new NonLoadableClass();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}

class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }
    
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
 }
 
 class ChildClass extends BaseClass {
    // public function moreTesting() {
    //     echo "ChildClass::moreTesting() called\n";
    // }
 }