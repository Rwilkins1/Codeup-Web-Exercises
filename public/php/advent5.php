<?php
function parser($filename) {
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
	$individual_strings = explode("\n", $content);
	$nice = [];
	foreach ($individual_strings as $strings) {
		$vowels = [];
		$stringarray = str_split($strings);
		if (in_array("a", $stringarray)) {
			array_push($vowels, "a");
		} 
		if (in_array("e", $stringarray)) {
			array_push($vowels, "e");
		} 
		if (in_array("i", $stringarray)) {
			array_push($vowels, "i");
		} 
		if (in_array("o", $stringarray)) {
			array_push($vowels, "o");
		} 
		if (in_array("u", $stringarray)) {
			array_push($vowels, "u");
		}
		if (count($vowels) >= 3) {

		}
		for($i = 0; $i = (count($stringarray)-2); $i++) {
			if ($stringarray[$i] == $stringarray[($i + 1)]) {
				echo "The letters " . $stringarray[$i] . " and " . $stringarray[($i + 1)] . "are the same\n";
			}
		}
	}


}
parser('advent5.txt');
?>