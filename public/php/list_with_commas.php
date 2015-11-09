<?php
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
$physicistsarray = explode(', ', $physicistsString);
$famousfakephysicists = [];


for($i = 0; $i < count($physicistsarray); $i++) {
	if($i == (count($physicistsarray)-1)) {
		array_push($famousfakephysicists, "and " . $physicistsarray[$i]);
	} else {
		array_push($famousfakephysicists, $physicistsarray[$i]);
	}
}
$famousfakephysicists1 = implode(', ', $famousfakephysicists);
echo "Some of the most famous fictional theoretical physicists are $famousfakephysicists1.\n";
?>