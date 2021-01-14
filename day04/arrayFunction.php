<?php
$input = ["a" => "green", "red", "b" => "green", "blue", "red"];
$result = array_unique($input);
var_dump($result);
$input = [4, "4", 3, 4, 3, "3"];
$result = array_unique($input);
var_dump($result);
$queue = ["orange", "banana"];
array_unshift($queue, "apple", "raspberry");
var_dump($queue);
$array = ["size" => "XL", "color" => "gold"];
var_dump(array_values($array));
$sweet = ['a' => 'apple', 'b' => 'banana'];
$fruits = ['sweet' => $sweet, 'sour' => 'lemon'];

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');
$fruits = ["d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple"];

function test_alter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function test_print1($item2, $key)
{
    echo "$key. $item2<br />\n";
}

echo "Before ...:\n";
array_walk($fruits, 'test_print1');

array_walk($fruits, 'test_alter', 'fruit');
echo "... and after:\n";

array_walk($fruits, 'test_print1');