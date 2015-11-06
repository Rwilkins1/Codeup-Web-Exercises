<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$search = array_search('Dana', $names, $strict = TRUE);

if (is_int($search)) {
	echo "TRUE\n";
} else {
	echo "FALSE\n";
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

echo comparison($names, $compare)
?>