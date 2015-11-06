<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $misc) {
	if(is_array($misc)) {
		echo "Array (";
		foreach ($misc as $item) {
			echo " $item ";
		}
		echo ")\n";
	} else {
	echo "$misc\n";
	}
}
?>