<?php
function inputhas($key) {
	if(isset($_REQUEST[$key])) {
		return "true" . PHP_EOL;
	} else {
		return "false" . PHP_EOL;
	}
}
function inputget($key) {
	if(isset($_REQUEST[$key])) {
	 	return $_REQUEST[$key];
	} else {
		return 0;
	}
}
function escape($input) {
	return (htmlspecialchars(strip_tags($_SESSION[$input])));
}

?>