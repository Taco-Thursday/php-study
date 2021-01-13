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
$func = function($value) {
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

$d = array_map('map_Spanish', $a , $b);
var_dump($d);
$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$d = array_map(null, $a, $b, $c);
var_dump($d);
$array = [1, 2, 3];
var_dump(array_map(null, $array));
$arr = ["stringkey" => "value", "stringkey1" => "value1"];
function cb1($a) {
    return [$a];
}
function cb2($a, $b) {
    return [$a, $b];
}
var_dump(array_map('cb1', $arr));
var_dump(array_map('cb2', $arr, $arr));
var_dump(array_map(null,  $arr));
var_dump(array_map(null, $arr, $arr));