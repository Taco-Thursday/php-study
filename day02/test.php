<?php

/*有三个学生，每个学生有两门课，英语和数学，每门课都有成绩，比如 jack math: 90, engilsh:76。
	要求：
	1. 用php的数组描述出来刚才的话
	2. 写一个方法求平均分最高的学生名字  getMaxScoreStudent()
	3. 一个是求数学的最低分，一个把英语最低分的人名打印出来*/
$students = [
	"jack" => [
		"Math" => 100,
		"English" => 55,
	],
	"lucy" => [
		"Math" => 95,
		"English" => 95,
	],
	"anny" => [
		"Math" => 106,
		"English" => 85,
	],
];
# var_dump($students);
# 平均分最高的学生名字
function getMaxScoreStudent($students)
{
	$result = '';
	$maxMeanScore = 0;
	foreach ($students as $name => $value) {
		$meanScore = ($value['Math'] + $value['English']) / 2;

		if ($meanScore > $maxMeanScore) {
			$maxMeanScore = $meanScore;
			$result = $name;
		}
	}
	return $result;
}
# getMaxScoreStudent($students);
echo getMaxScoreStudent($students);

# 数学的最低分
function getMinScore($students)
{
	$mathScore = $students['jack']['Math'];
	foreach ($students as $name => $value) {
		if ($value['Math'] < $mathScore) {
			$mathScore = $value['Math'];
		}
	}
	return $mathScore;
}
echo getMinScore($students);

# 英语最低分的名字
function getMinEnglishStudent($students)
{
	$minEnglishName = '';
	$englishScore = $students['jack']['English'];
	foreach ($students as $name => $value) {
		if ($value['English'] < $englishScore) {
			$englishScore = $value['English'];
			$minEnglishName = $name;
		}
	}
	return $minEnglishName;
}
echo getMinEnglishStudent($students);