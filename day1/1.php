<!DOCTYPE html>
<html>
<head>
	<title>day01</title>
</head>
<body>
	<?php
		echo "PHP";
		echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10);
		echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";
		echo "PHP";
		$some_var = 10;
		#($some_var) ? echo 'true' : echo 'false';
		echo $some_var;
		($some_var) ? print 'true' : print 'false';
		echo $some_var ? 'true': 'false';
		echo "Sum: ", 1 + 2;
		echo "Hello ", isset($name) ? $name : "John Doe", "!";
		echo 'Sum: ' . (1 + 2);
		echo 'Hello ' . (isset($name) ? $name : 'John Doe') . '!';
		echo "The sum is " . (1 | 2);
		echo "The sum is ", 1 | 2;
		#phpinfo();
		echo $_SERVER['HTTP_USER_AGENT'];
	?>
	<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
	?>
	<h3>strpos() 肯定没有返回假 (FALSE)</h3>
	<p>正在使用 Internet Explorer</p>
	<?php
		} else {
	?>
	<h3>strpos() 肯定返回假 (FALSE)</h3>
	<center><b>没有使用 Internet Explorer</b></center>
	<?php
		}
	?>
</body>
</html>