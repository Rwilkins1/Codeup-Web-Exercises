<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsarray = explode(', ', $physicistsString);


function humanizedList($physicistsarray, $argc, $argv) {
	$famousfakephysicists = [];
	foreach ($physicistsarray as $index => $name) {
		$physicistsarray[$index] = $name;
		if($index == count($physicistsarray)-1) {
			array_push($famousfakephysicists, "and " . $name);
		} else {
			array_push($famousfakephysicists, $name);
		}
		
	}
	if($argc == 2 && $argv[1] == "alphabetical") {
		asort($famousfakephysicists);
	}
	
	// for($i = 0; $i < count($physicistsarray); $i++) {
	// 	asort($physicistsarray);
	// 	if($i == (count($physicistsarray)-1)) {
	// 		array_push($famousfakephysicists, "and " . $physicistsarray[$i]);
	// 	} else {
	// 		array_push($famousfakephysicists, $physicistsarray[$i]);
	// 	}
	// 	print_r($famousfakephysicists);
	// }
	$famousfakephysicists1 = implode(', ', $famousfakephysicists);
	echo "Some of the most famous fictional theoretical physicists are $famousfakephysicists1.\n";
}

humanizedlist($physicistsarray, $argc, $argv);

?>