<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>This is going to be ignored by PHP and displayed by the browser.</p>
	<?php echo 'While this is going to be parsed.'; ?>
	<p>This will also be ignored by PHP and displayed by the browser.</p>
	<?php
		$expression = true;
	?>
	<?php if ($expression == true) : ?>
		This will show if the expression is true.
	<?php else: ?>
		Otherwise this will show.
	<?php endif; ?>

	<?php
		/*
		echo "This is a test";
		*/
	?>

	<?php
		$a_bool = TRUE;   // 布尔值 boolean
		$a_str  = "foo";  // 字符串 string
		$a_str2 = 'foo';  // 字符串 string
		$an_int = 12;     // 整型 integer

		echo gettype($a_bool); // 输出:  boolean
		echo gettype($a_str);  // 输出:  string

		// 如果是整型，就加上 4
		if (is_int($an_int)) {
		    $an_int += 4;
		};

		// 如果 $bool 是字符串，就打印出来
		// (啥也没打印出来)
		if (is_string($a_bool)) {
		    echo "String: $a_bool";
		};
		$action = "show_version";
		// == 是一个操作符，它检测两个变量是否相等，并返回一个布尔值
		if ($action == "show_version") {
		    echo "The version is 1.23";
		};
		$show_separators = 1;
		if ($show_separators) {
		    echo "<hr>\n";
		}

		var_dump((bool) "");        // bool(false)
		var_dump((bool) 1);         // bool(true)
		var_dump((bool) -2);        // bool(true)
		var_dump((bool) "foo");     // bool(true)
		var_dump((bool) 2.3e5);     // bool(true)
		var_dump((bool) array(12)); // bool(true)
		var_dump((bool) array());   // bool(false)
		var_dump((bool) "false");   // bool(true)

		$a = 1234; // 十进制数
		$a = 0123; // 八进制数 (等于十进制 83)
		$a = 0x1A; // 十六进制数 (等于十进制 26)
		$a = 0b11111111; // 二进制数字 (等于十进制 255)
		#$a = 1_234_567; // 整型数值 (PHP 7.4.0 以后)

		#$b = 0129;

		$large_number = 9223372036854775807;
		var_dump($large_number);                     // int(9223372036854775807)

		$large_number = 9223372036854775808;
		var_dump($large_number);                     // float(9.2233720368548E+18)

		$million = 1000000;
		$large_number =  50000000000000 * $million;
		var_dump($large_number);                     // float(5.0E+19)

		var_dump(25/7);         // float(3.5714285714286) 
		var_dump((int) (25/7)); // int(3)
		var_dump(round(25/7));  // float(4)
		var_dump(intdiv(25,7));  // float(3)
		echo (int) ( (0.1+0.7) * 10 ); // 显示 7!

		$a = 1.234; 
		$b = 1.2e3; 
		$c = 7E-10;
		#$d = 1_234.567; // 从 PHP 7.4.0 开始支持

		$a = 1.23456789;
		$b = 1.23456780;
		$epsilon = 0.00001;

		if(abs($a-$b) < $epsilon) {
		    echo "true";
		}
	?>
</body>
</html>