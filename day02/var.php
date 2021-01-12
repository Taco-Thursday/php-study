<?php
	$var = 'Bob';
	$Var = 'Joe';
	echo "$var, $Var";      // 输出 "Bob, Joe"

	#$4site = 'not yet';     // 非法变量名；以数字开头
	$_4site = 'not yet';    // 合法变量名；以下划线开头
	$i站点is = 'mansikka';  // 合法变量名；可以用中文

	$foo = 'Bob';              // 将 'Bob' 赋给 $foo
	$bar = &$foo;              // 通过 $bar 引用 $foo
	$bar = "My name is $bar";  // 修改 $bar 变量
	echo $bar;
	echo $foo;                 // $foo 的值也被修改
	$a = 1; /* global scope */

	function Test()
	{
	    echo $a; /* reference to local scope variable */
	}

	$a = 1;
	$b = 2;

	function Sum()
	{
	    /*global $a, $b;

	    $b = $a + $b;*/
	    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
	}

	Sum();
	echo $b;
	function test_global()
	{
	    // 大多数的预定义变量并不 "super"，它们需要用 'global' 关键字来使它们在函数的本地区域中有效。
	    global $HTTP_POST_VARS;

	    echo $HTTP_POST_VARS['name'];

	    // Superglobals 在任何范围内都有效，它们并不需要 'global' 声明。Superglobals 是在 PHP 4.1.0 引入的。
	    // echo $_POST['name'];
	}
	test_global();
	function test1()
	{
	    static $a = 0;
	    echo $a;
	    $a++;
	}
	test1();
	function test2()
	{
	    static $count = 0;

	    $count++;
	    echo $count;
	    if ($count < 10) {
	        test2();
	    }
	    $count--;
	    echo $count;
	}
	test2();
	function foo(){
	    static $int = 0;          // correct
	    #static $int = 1+2;        // wrong  (as it is an expression)
	    #static $int = sqrt(121);  // wrong  (as it is an expression too)

	    $int++;
	    echo $int;
	}
	foo();
	$a = 'hello';
	$$a = 'world';
	echo "$a ${$a}";
	echo "$a $hello";

	/*class foo {
	    var $bar = 'I am bar.';
	    var $arr = array('I am A.', 'I am B.', 'I am C.');
	    var $r   = 'I am r.';
	}

	$foo = new foo();
	$bar = 'bar';
	$baz = array('foo', 'bar', 'baz', 'quux');
	echo $foo->$bar . "\n";
	echo $foo->$baz[1] . "\n";

	$start = 'b';
	$end   = 'ar';
	echo $foo->{$start . $end} . "\n";

	$arr = 'arr';
	echo $foo->$arr[1] . "\n";
	echo $foo->{$arr}[1] . "\n";*/

	define("CONSTANT", "Hello world.");
	echo CONSTANT; // outputs "Hello world."
	#echo Constant; // 输出 "Constant" 并发出一个提示级别错误信息
	const CONSTANT1 = 'Hello World';

	echo CONSTANT1;
	// PHP 5.6.0 后的写法
	const ANOTHER_CONST = CONSTANT.'; Goodbye World';
	echo ANOTHER_CONST;

	const ANIMALS = array('dog', 'cat', 'bird');
	echo ANIMALS[1]; // 将输出 "cat"

	// PHP 7 中的写法
	define('ANIMALS', array(
	    'dog',
	    'cat',
	    'bird'
	));
	echo ANIMALS[1]; // 将输出 "cat"
	$x = 4;
	// this line might result in unexpected output:
	echo "x minus one equals " . $x-1 . ", or so I hope\n";
	// because it is evaluated like this line:
	echo (("x minus one equals " . $x) - 1) . ", or so I hope\n";
	// the desired precedence can be enforced by using parentheses:
	echo "x minus one equals " . ($x-1) . ", or so I hope\n";

	echo (5 % 3)."\n";           // prints 2
	echo (5 % -3)."\n";          // prints 2
	echo (-5 % 3)."\n";          // prints -2
	echo (-5 % -3)."\n";         // prints -2

	$b = "Hello ";
	$b .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";
	echo $b;