<?php
$makefoo = true;

/* 不能在此处调用foo()函数，
	   因为它还不存在，但可以调用bar()函数。*/

bar();

if ($makefoo) {
	function foo()
	{
		echo "I don't exist until program execution reaches me.\n";
	}
}

/* 现在可以安全调用函数 foo()了，
	   因为 $makefoo 值为真 */

if ($makefoo) foo();

function bar()
{
	echo "I exist immediately upon program start.\n";
}

function foo1()
{
	function bar1()
	{
		echo "I don't exist until foo() is called.\n";
	}
}

/* 现在还不能调用bar()函数，因为它还不存在 */

foo1();

/* 现在可以调用bar()函数了，因为foo()函数
	   的执行使得bar()函数变为已定义的函数 */

bar1();

$a = 10;
function recursion($a)
{
	if ($a < 20) {
		echo "$a\n";
		recursion($a + 1);
	}
}
recursion($a);

$input = ['1', '2'];
function takes_array($input)
{
	echo "$input[0] + $input[1] = ", $input[0] + $input[1];
}
takes_array($input);

function add_some_extra(&$string)
{
	$string .= 'and something extra.';
}
$str = 'This is a string, ';
add_some_extra($str);
echo $str;    // outputs 'This is a string, and something extra.'