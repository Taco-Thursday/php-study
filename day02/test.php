<?php
	$students = [
		"jack" => [
			"Math" => 90,
			"English" => 55,
		],
		"lucy" => [
			"Math" => 70,
			"English" => 65,
		],
		"anny" => [
			"Math" => 96,
			"English" => 85,
		],
	];
	var_dump($students);
	function getMaxScoreStudent()
	{
		global $students;
		foreach ($students as &$value) {
			$mean = ($value['Math'] + $value['English']) / 2;
			echo "$mean";
		}
	}
	getMaxScoreStudent();