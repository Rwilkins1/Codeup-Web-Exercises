<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isitthere($names) {
	$search = array_search('Dana', $names, $strict = TRUE);

	if (is_int($search)) {
		echo "TRUE\n";
	} else {
		echo "FALSE\n";
	}
}

function comparison($names, $compare) {
	$similarities = 0;
	foreach ($names as $data) {
		$results = array_search($data, $names);
		if (in_array($data, $compare)) {
			$similarities++;
		}
	}
	echo "There are " . $similarities . " similarities between the arrays\n";
}

function combine_arrays($names, $compare) {
	$newarray = [];
	for ($i = 0; $i <= 4; $i++) {
		array_push($newarray, $names[$i], $compare[$i]);
		if (in_array($names[$i], $compare))
			array_pop($newarray);
	}
	print_r($newarray);
}

echo isitthere($names);
echo comparison($names, $compare);
echo combine_arrays($names, $compare);
?>