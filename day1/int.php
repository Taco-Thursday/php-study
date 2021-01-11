<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// 输出： Arnold once said: "I'll be back"
		echo 'Arnold once said: "I\'ll be back"';

		// 输出： You deleted C:\*.*?
		echo 'You deleted C:\\*.*?';

		// 输出： You deleted C:\*.*?
		echo 'You deleted C:\*.*?';

		// 输出： This will not expand: \n a newline
		echo 'This will not expand: \n a newline';

		// 输出： Variables do not $expand $either
		echo 'Variables do not $expand $either';

		$str = <<<EOD
		Example of string
		spanning multiple lines
		using heredoc syntax.
		EOD;

		/* 含有变量的更复杂示例 */
		class foo
		{
		    var $foo;
		    var $bar;

		    function foo()
		    {
		        $this->foo = 'Foo';
		        $this->bar = array('Bar1', 'Bar2', 'Bar3');
		    }
		}

		$foo = new foo();
		$name = 'MyName';

		echo <<<EOT
		My name is "$name". I am printing some $foo->foo.
		Now, I am printing some {$foo->bar[1]}.
		This should print a capital 'A': \x41
		EOT;

		var_dump(array(<<<EOD
		foobar!
		EOD
		));

		// 静态变量
		function fao()
		{
		    static $bar = <<<LABEL
		Nothing in here...
		LABEL;
		}

		// 类的常量、属性
		class fao
		{
		    const BAR = <<<FOOBAR
		Constant example
		FOOBAR;

		    public $baz = <<<FOOBAR
		Property example
		FOOBAR;
		}

		$fao = new fao();
		var_dump($fao);

		echo <<<"FOOBAR"
		Hello World!
		FOOBAR;

		$str1 = <<<'EOD'
		Example of string
		spanning multiple lines
		using nowdoc syntax.
		EOD;

		echo <<<'EOT'
		My name is "$name". I am printing some $foo->foo.
		Now, I am printing some {$foo->bar[1]}.
		This should not print a capital 'A': \x41
		EOT;

		class fno {
		    public $bar = <<<'EOT'
		bar
		EOT;
		}

		$juice = "apple";

		echo "He drank some $juice juice.".PHP_EOL;
		// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
		echo "He drank some juice made of $juice.";
	?>
</body>
</html>