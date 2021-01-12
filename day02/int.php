<?php
	$juices = array("apple", "orange", "koolaid1" => "purple");
	echo "He drank some $juices[0] juice.".PHP_EOL;
	echo "He drank some $juices[1] juice.".PHP_EOL;
	#echo "He drank some juice made of $juice[0]s.".PHP_EOL; // Won't work
	echo "He drank some $juices[koolaid1] juice.".PHP_EOL;
	class people {
	    public $john = "John Smith";
	    public $jane = "Jane Smith";
	    public $robert = "Robert Paulsen";
	    
	    public $smith = "Smith";
	}
	$people = new people();
	echo "$people->john drank some $juices[0] juice.".PHP_EOL;
	echo "$people->john then said hello to $people->jane.";
	echo "$people->john's wife greeted $people->robert.".PHP_EOL;
	#echo "$people->robert greeted the two $people->smiths."; // Won't work
	// 显示所有错误
	error_reporting(E_ALL);
	$great = 'fantastic';
	// 无效，输出: This is { fantastic}
	echo "This is { $great}";
	// 有效，输出： This is fantastic
	echo "This is {$great}";
	echo "This is ${great}";
	echo "This square is {$people->john}00 centimeters broad.";
	// 有效，只有通过花括号语法才能正确解析带引号的键名
	echo "This works: {$juices['koolaid1']}";
	class foo {
	    var $bar = 'I am bar.';
	    var $baz = 'I am baz111.';
	}

	$foo = new foo();
	$bar = 'bar';
	$baz = array('foo', 'bar', 'baz', 'quux');
	echo "{$foo->$bar}\n";
	echo "{$foo->{$baz[2]}}\n";
	class beers {
	    const softdrink = 'rootbeer';
	    public static $ale = 'ipa';
	}

	$rootbeer = 'A & W';
	$ipa = 'Alexander Keith\'s';

	// 有效，输出： I'd like an A & W
	echo "I'd like an {${beers::softdrink}}\n";

	// 也有效，输出： I'd like an Alexander Keith's
	echo "I'd like an {${beers::$ale}}\n";

	// 取得字符串的第一个字符
	$str = 'This is a test.';
	$str[strlen($str)-1] = 'e';
	$first = $str[strlen($str)-1]; 
	echo $first;

	/*$str = 'abc';

	var_dump($str['1']);
	var_dump(isset($str['1']));

	var_dump($str['1.0']);
	var_dump(isset($str['1.0']));

	var_dump($str['x']);
	var_dump(isset($str['x']));

	var_dump($str['1x']);
	var_dump(isset($str['1x']));*/
	#echo "\$foo==$foo; type is " . gettype ($foo) . "<br />\n";