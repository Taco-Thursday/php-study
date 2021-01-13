<?php
$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$array2 = ["a" => "green", "b" => "yellow", "blue", "red"];
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);
$array1 = ['blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4];
$array2 = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8];

var_dump(array_intersect_key($array1, $array2));
$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "red"];
$array2 = ["a" => "GREEN", "B" => "brown", "yellow", "red"];

print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));
function key_compare_func($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = ['blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4];
$array2 = ['green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8];

var_dump(array_intersect_ukey($array1, $array2, 'key_compare_func'));
$array1 = ["a" => "green", "red", "blue"];
$array2 = ["b" => "green", "yellow", "red"];
$result = array_intersect($array1, $array2);
print_r($result);
$search_array = ['first' => null, 'second' => 4];
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
$array = ['a' => 1, 'b' => 2, 'c' => 3];

$firstKey = array_key_first($array);
$lastKey = array_key_last($array);

echo "$firstKey";
echo "$lastKey";
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));

$array = array("blue", "red", "green", "blue", "blue");
print_r(array_keys($array, "blue"));

$array = array(
    "color" => array("blue", "red", "green"),
    "size"  => array("small", "medium", "large")
);
print_r(array_keys($array));
function cube($n)
{
    return $n;
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
$func = function ($value) {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));
function show_Spanish($n, $m)
{
    return "The number {$n} is called {$m} in Spanish";
}

function map_Spanish($n, $m)
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$c = array_map('show_Spanish', $a, $b);
var_dump($c);

$d = array_map('map_Spanish', $a, $b);
var_dump($d);
$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$d = array_map(null, $a, $b, $c);
var_dump($d);
$array = [1, 2, 3];
var_dump(array_map(null, $array));
$arr = ["stringkey" => "value", "stringkey1" => "value1"];
function cb1($a)
{
    return [$a];
}
function cb2($a, $b)
{
    return [$a, $b];
}
var_dump(array_map('cb1', $arr));
var_dump(array_map('cb2', $arr, $arr));
var_dump(array_map(null,  $arr));
var_dump(array_map(null, $arr, $arr));
$ar1 = ["color" => ["favorite" => "red"], 5];
$ar2 = [10, "color" => ["favorite" => "green", "blue"]];
$result = array_merge_recursive($ar1, $ar2);
var_dump($result);
$array1 = ["color" => "red", 2, 4];
$array2 = ["a", "b", "color" => "green", "shape" => "trapezoid", 4];
$result = array_merge($array1, $array2);
print_r($result);
$array1 = [];
$array2 = [1 => "data"];
$result = array_merge($array1, $array2);
$array1 = [0 => 'zero_a', 2 => 'two_a', 3 => 'three_a'];
$array2 = [1 => 'one_b', 3 => 'three_b', 4 => 'four_b'];
$result = $array1 + $array2;
var_dump($result);
$beginning = 'foo';
$end = [1 => 'bar'];
$result = array_merge((array)$beginning, (array)$end);
print_r($result);
$input = [12, 10, 9];

$result = array_pad($input, 5, 0);
$result = array_pad($input, -4, -1);
$result = array_pad($input, 2, "noop");
$stack = ["orange", "banana", "apple", "raspberry"];
$fruit = array_pop($stack);
print_r($stack);
$a = [2, 4, 6, 8];
echo "product(a) = " . array_product($a) . "\n";
echo "product(array()) = " . array_product([]) . "\n";
$stack = ["orange", "banana"];
array_push($stack, "apple", "raspberry");
print_r($stack);
$input = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}

function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}

$a = [1, 2, 3, 4, 5];
$x = [];

var_dump(array_reduce($a, "sum")); // int(15)
var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);
$base = ["orange", "banana", "apple", "raspberry"];
$replacements = [0 => "pineapple", 4 => "cherry"];
$replacements2 = [0 => "grape"];

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
$input  = ["php", 4.0, ["green", "red"]];
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);
$array = [0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red'];

$key = array_search('green', $array); // $key = 2;
$key = array_search('red', $array);   // $key = 1;
$stack = ["orange", "banana", "apple", "raspberry"];
$fruit = array_shift($stack);
print_r($stack);
$input = ["a", "b", "c", "d", "e"];

$output = array_slice($input, 4);      // returns "c", "d", and "e"
$output = array_slice($input, -2, 1);  // returns "d"
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
var_dump($output);
$input = array(1 => "a", "b", "c", "d", "e");
print_r(array_slice($input, 1, 2));
$ar = array('a'=>'apple', 'b'=>'banana', '42'=>'pear', 'd'=>'orange');
print_r(array_slice($ar, 0, 3));
print_r(array_slice($ar, 0, 3, true));
$input = array("red", "green", "blue", "yellow");
array_splice($input, 2);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, -1);
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, 1, count($input), "orange");
var_dump($input);

$input = array("red", "green", "blue", "yellow");
array_splice($input, -1, 1, array("black", "maroon"));
var_dump($input);

// // 添加两个新元素到 $input
// array_push($input, $x, $y);
// array_splice($input, count($input), 0, array($x, $y));

// // 移除 $input 中的最后一个元素
// array_pop($input);
// array_splice($input, -1);

// // 移除  $input 中第一个元素
// array_shift($input);
// array_splice($input, 0, 1);

// // 在 $input 的开头插入一个元素
// array_unshift($input, $x, $y);
// array_splice($input, 0, 0, array($x, $y));

// // 在 $input  的索引  $x 处替换值
// $input[$x] = $y; // 对于键名和偏移量等值的数组
// array_splice($input, $x, 1, $y);

$a = [2, 4, 6, 8];
echo "sum(a) = " . array_sum($a) . "\n";

$b = ["a" => 1.2, "b" => 2.3, "c" => 3.4];
echo "sum(b) = " . array_sum($b) . "\n";