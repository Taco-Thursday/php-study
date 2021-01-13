<?php
	$students = [
		"jack" => [
			"Math" => 90,
			"English" => 55,
		],
		"lucy" => [
			"Math" => 75,
			"English" => 65,
		],
		"anny" => [
			"Math" => 96,
			"English" => 85,
		],
	];
	var_dump($students);
	function getMaxScoreStudent($students)
	{
		$result = '';
		foreach ($students as $name => $value) {
			$mean = ($value['Math'] + $value['English']) / 2;
			$array = array($mean);
			var_dump($array);
			$max = $array[0];
			for ($i=1; $i < count($array); $i++) {
				if($array[$i]>$max){
					$max = $array[$i];
				}
			}
			// echo $max;
			if($mean == $max){
				$result = $name;
			}
		}
		return $result;
	}
	// getMaxScoreStudent($students);
	echo getMaxScoreStudent($students);