<?php
	$array = array(
		'name' => 'xiaoli',
		'age' => 12
	);

	$array1 = [
		/*'time' => 2021,
		'date' => '1 ',
		8.7 => '08',
		true => 1,
		false => 0,
		null => null,
		1    => "a",
	    "1"  => "b",
	    1.5  => "c",
	    true => "d",
	            "a",
		        "b",
		  6  => "c",
		        "d",*/
		"foo" => "bar",
	    42    => 24,
	    "multi" => array(
	         "dimensional" => array(
	             "array" => "foo"
	         )
	    )
	];

	/*var_dump($array1);
	var_dump($array1["multi"]["dimensional"]["array"]);*/

	function getArray() {
	    return array(1, 2, 3);
	}
	$secondElement = getArray()[1];
	echo $secondElement;
	$tmp = getArray();

	$arr = array(5 => 1, 12 => 2);

	$arr[] = 56;    // This is the same as $arr[13] = 56;
                	// at this point of the script
	$arr["x"] = 42; // This adds a new element to
                // the array with key "x"
	unset($arr[5]); // This removes the element from the array
	var_dump($arr);

	foreach ($arr as $key => $value) {
		unset($arr[$key]);
	}
	$arr[] = 6;
	$arr = array_values($arr);
	print_r($arr);

	/*$array = array(1, 2);
	$count = count($array);
	for ($i = 0; $i < $count; $i++) {
	    echo "\nChecking $i: \n";
	    echo "Bad: " . $array['$i'] . "\n";
	    echo "Good: " . $array[$i] . "\n";
	    echo "Bad: {$array['$i']}\n";
	    echo "Good: {$array[$i]}\n";
	}*/

	$arr = array('fruit' => 'apple', 'veggie' => 'carrot');
	// Correct
	print $arr['fruit'];  // apple
	print $arr['veggie']; // carrot
	print $arr[fruit];    // apple
	define('fruit', 'veggie');
	print $arr['fruit'];  // apple
	print $arr[fruit];    // carro
	print "Hello $arr[fruit]";      // Hello apple
	print "Hello {$arr[fruit]}";    // Hello carrot
	print "Hello {$arr['fruit']}";  // Hello apple
	/*print "Hello $arr['fruit']";
	print "Hello $_GET['foo']";*/
	print "Hello " . $arr['fruit']; // Hello apple

	class A {
	    private $A; // This will become '\0A\0A'
	}

	class B extends A {
	    private $A; // This will become '\0B\0A'
	    public $AA; // This will become 'AA'
	}

	var_dump((array) new B());
	$switching = array(         10, // key = 0
                    5    =>  6,
                    3    =>  7, 
                    'a'  =>  4,
                            11, // key = 6 (maximum of integer-indices was 5)
                    '8'  =>  2, // key = 8 (integer!)
                    '02' => 77, // key = '02'
                    0    => 12  // the value 10 will be overwritten by 12
                  );
	$colors = array('red', 'blue', 'green', 'yellow');

	foreach ($colors as $color) {
	    echo "Do you like $color?\n";
	}
	foreach ($colors as &$color) {
	    $color = strtoupper($color);
	}
	#unset($color); /* ensure that following writes to $color will not modify the last array element */

	// Workaround for older versions
	/*foreach ($colors as $key => $color) {
	    $colors[$key] = strtoupper($color);
	}*/

	print_r($colors);
		$handle = opendir('.');
	while (false !== ($file = readdir($handle))) {
	    $files[] = $file;
	}
	closedir($handle);
	$fruits = array ( "fruits"  => array ( "a" => "orange",
                                       "b" => "banana",
                                       "c" => "apple"
                                     ),
                  "numbers" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "holes"   => array (      "first",
                                       5 => "second",
                                            "third"
                                     )
                );

	$arr1 = array(2, 3);
	$arr2 = $arr1;
	$arr2[] = 4; // $arr2 is changed,
	             // $arr1 is still array(2, 3)
	             
	$arr3 = &$arr1;
	$arr3[] = 4; // now $arr1 and $arr3 are the same

	var_dump($arr3);