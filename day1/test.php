<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		# 单引号 双引号区别
		$var = 'my name is xiaoming';
		     
		echo "$var";    //结果是:my name is xiaoming
		 
		echo '$var';    //结果是:$var
		$a = 'He\'s name is xiaoming.' ;
		#$a = "He\'s name is xiaoming.";
		echo $a;

		$quantity = 2;
		$price = 100;
		$total = $quantity * $price;

		# 打印结果使用双引号：
		echo "<h3>使用双引号：</h3>";
		echo "<p>你所出售的 <b>$quantity</b> 件产品,单价为 <b>\$$price</b>. 总额为 <b>\$$total</b>.</p>\n";
 
		# 打印结果使用单引号：
		echo '<h3>使用单引号：</h3>';
		echo '<p>你所出售的 <b>$quantity</b> 件产品,单价为 <b>\$$price</b>.总额为 <b>\$$total</b>.</p>\n';

		# 定义数组有哪些方法
		$array = array(
		    "name" => "jack",
		    "age" => 12,
		);

		# 自 PHP 5.4 起
		$array1 = [
		    "name" => "ancy",
		    "age" => "20",
		];

		#如果接受url中的查询字符串，如果是数组形式如果获取
		$url = 'https://www.baidu.com/s?name=xiaoming&age=12&cate=bannar';
		$info = parse_url($url);
		parse_str($info['query'],$url_params_arr);
		var_dump($url_params_arr);

		#如何判断数据类型，写一个方法传入不同类型，输出类型名称
		$bool = TRUE;   // 布尔值 boolean
		$str  = "foo";  // 字符串 string

		echo gettype($bool); // 输出:  boolean
		echo gettype($str);  // 输出:  string
	?>
</body>
</html>