<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$search = array_search('Dana', $names, $strict = TRUE);

if (is_int($search)) {
	echo "TRUE\n";
} else {
	echo "FALSE\n";
}
?>