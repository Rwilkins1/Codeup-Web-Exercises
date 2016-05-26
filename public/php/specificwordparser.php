<?php
function parser($filename, $word)
{
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
	$allwordsarray = explode(" ", $content);
	foreach($allwordsarray as $individualwords) {
		if($individualwords == $word) {
			unset($individualwords);
		} else {
		var_dump($individualwords);
		}
	}
}
parser("specificwordtest.txt", "the");
?>