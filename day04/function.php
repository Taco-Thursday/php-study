<?php
function makecoffee($type = "cappuccino")
{
    return "Making a cup of $type[1].\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee(["espresso", "apple"]);
function makecoffee1($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of ".join(", ", $types)." with $device.\n";
}
echo makecoffee1();
echo makecoffee1(array("cappuccino", "lavazza"), "teapot");
function makeyogurt($flavour, $type = "acidophilus")
{
    return "Making a bowl of $type $flavour.\n";
}

echo makeyogurt("raspberry");   // works as expected

function sum1(...$numbers)
{
    $acc1 = 0;
    foreach($numbers as $index => $n){
        $acc1 += $n;
    }
    return $acc1;
}
echo sum1(1,2,3,4,5,6)."\n";
function add1($a, $b)
{
    return $a + $b;
}
echo add1(...[1, 3])."\n";
$a111 = [2,3];
echo add1(...$a111);
function total_intervals($unit, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervals('d', $a, $b).' days';

// This will fail, since null isn't a DateInterval object.
// echo total_intervals('d', null);
function small_numbers()
{
    return array (0, 1, 2);
}
$smallNum = list ($zero, $one, $two) = small_numbers();
var_dump($smallNum);
$a = 1;
$b =& $a;
unset($a);
echo "$b";
function foo() {
    echo "In foo()<br />\n";
}

function bar($arg = '') {
    echo "In bar(); argument was '$arg'.<br />\n";
}

// 使用 echo 的包装函数
function echoit($string)
{
    echo $string;
}

$func = 'foo';
$func();        // This calls foo()

$func = 'bar';
$func('test');  // This calls bar()

$func = 'echoit';
$func('test');  // This calls echoit()
class Foo
{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // This calls the Bar() method
    }

    function Bar()
    {
        echo "This is Bar";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname();   // This calls $foo->Variable()
class Foo1
{
    static $variable = 'static property';
    static function Variable()
    {
        echo 'Method Variable called';
    }
}

echo Foo1::$variable; // This prints 'static property'. It does need a $variable in this scope.
$variable = "Variable";
echo Foo1::$variable();  // This calls $foo->Variable() reading $variable in this scope.
class Foo2
{
    static function bar()
    {
        echo "barccc\n";
    }
    function baz()
    {
        echo "baz\n";
    }
}

$func = array("Foo2", "bar");
$func(); // prints "barccc"
$func = array(new Foo2, "baz");
$func(); // prints "baz"
$func = "Foo2::bar";
$func(); // prints "bar"
$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};

$greet('World');
$greet('PHP');

$message = 'hello';

// 没有 "use"
$example = function () {
    // var_dump($message);
};
echo $example();
// 继承 $message
$example = function () use ($message) {
    var_dump($message);
};
echo $example();
$message = 'world';
echo $example();
$example = function () use (&$message) {
    var_dump($message);
};
echo $example();
$message = 'world';
echo $example();
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");
class Test
{
    public function testing()
    {
        return function() {
            var_dump($this);
        };
    }
}

$object = new Test;
$function = $object->testing();
$function();
$y = 1;
 
$fn1 = fn($x) => $x + $y;
// 相当于 using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

var_export($fn1(3));
$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// 输出 51
var_export($fn(5)(10));