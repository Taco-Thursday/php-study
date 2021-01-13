<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4, "FIRst" => 3);
print_r(array_change_key_case($input_array, CASE_LOWER));
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, SORT_DESC, $ar2, SORT_DESC);
// var_dump($ar1);
// var_dump($ar2);
$ar = array(
    array("10", 11, 100, 100, "a"),
    array(1,  2, "2",   3,   1)
);
array_multisort(
    $ar[0],
    SORT_ASC,
    SORT_STRING,
    $ar[1],
    SORT_NUMERIC,
    SORT_DESC
);
// var_dump($ar);
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $shell; // *
$input1 = "hello";
$input2 = "hello,there";
// var_dump( explode( ',', $input1 ) );
// var_dump( explode( ',', $input2 ) );
$str = 'one|two|three|four';

// 正数的 limit
print_r(explode('|', $str, 2));

// 负数的 limit（自 PHP 5.1 起）
print_r(explode('|', $str, -2));
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
var_dump(implode('hello', array())); // string(0) ""
function foo(&$bar)
{
    unset($bar);
    $bar = "blah";
}

$bar = 'something';
echo "$bar\n";

foo($bar);
echo "$bar\n";
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 3));
print_r(array_chunk($input_array, 2, true));
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
$first_names = array_column($records, 'first_name');
print_r($first_names);
$last_names = array_column($records, 'last_name', 'id');
print_r($last_names);
class User
{
    public $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('user 1'),
    new User('user 2'),
    new User('user 3'),
];
var_dump($users);
print_r(array_column($users, 'username'));
class Person
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function __get($prop)
    {
        return $this->$prop;
    }

    public function __isset($prop): bool
    {
        return isset($this->$prop);
    }
}

$people = [
    new Person('Fred'),
    new Person('Jane'),
    new Person('John'),
];

print_r(array_column($people, 'name'));
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
$array = array(1, "hello", 1, "world", "hello", 1, 1);
print_r(array_count_values($array));
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "d" => "yellow", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array1, $array2));
function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b) ? 1 : -1;
}

$array3 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array4 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array3, $array4, "key_compare_func");
print_r($result);
function key_compare_func1($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func1'));
$array1 = array("a" => "green", "red", "blue", "red", "qwe", "sadas");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);

print_r($result);
class S
{
    private $v;

    public function __construct(string $v)
    {
        $this->v = $v;
    }

    public function __toString()
    {
        return $this->v;
    }
}

$source = [new S('a'), new S('b'), new S('c')];
$filter = [new S('b'), new S('c'), new S('d')];

$result = array_diff($source, $filter);
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
var_dump($a);
$a = array_fill(5, 6, 'banana');
$b = array_fill(-2, 4, 'pear');
var_dump($a);
var_dump($b);
function odd($var)
{
    // returns whether the input integer is odd
    return ($var & 1);
}

function even($var)
{
    // returns whether the input integer is even
    return (!($var & 1));
}

$array1 = ["a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));
$entry = [
    0 => 'foo',
    1 => false,
    2 => -1,
    3 => null,
    4 => '',
    5 => 1
];

print_r(array_filter($entry));
$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];

var_dump(array_filter($arr, function ($k) {
    return $k == 'b';
}, ARRAY_FILTER_USE_KEY));

var_dump(array_filter($arr, function ($v, $k) {
    return $k == 'b' || $v == 4;
}, ARRAY_FILTER_USE_BOTH));
$input = ["oranges", "apples", "pears"];
$flipped = array_flip($input);

print_r($flipped);
$input = ["a" => 1, "b" => 1, "d" => 1, "c" => 2];
$flipped = array_flip($input);

print_r($flipped);
