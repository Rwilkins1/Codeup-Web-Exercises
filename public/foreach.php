<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $misc) {
	if(is_string($misc)) {
		echo "string\n";
	} else if (is_null($misc)) {
		echo "null\n";
	} else if (is_array($misc)) {
		echo "array\n";
	} else if (is_int($misc)) {
		echo "integer\n";
	} else if (is_float($misc)) {
		echo "float\n";
	} else if (is_bool($misc)) {
		echo "boolean\n";
	}
}
?>