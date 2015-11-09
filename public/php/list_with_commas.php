<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Abraham Lincoln';
$physicistsarray = explode(', ', $physicistsString);

function humanizedList($physicistsarray, $argc, $argv) {
	if($argc == 2 && $argv[1] == "alphabetical") {
		asort($physicistsarray);
	}
		$lastentry = 'and ' . array_pop($physicistsarray);
		array_push($physicistsarray, $lastentry);
		print_r($physicistsarray);
		
	$famousfakephysicists = implode(', ', $physicistsarray);
	echo "Some of the most famous fictional theoretical physicists are $famousfakephysicists.\n";
}


humanizedlist($physicistsarray, $argc, $argv);

?>