<?php

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
    $contactarray = explode("\n", $content);
    $contacts = array();
    for ($i = 0; $i < count($contactarray); $i++) {
    	$innercontacts = explode("|", $contactarray[$i]);
    	$number1 = array_pop($innercontacts);
    	$number2 = str_split($number1);
    	array_splice($number2, 3, 0, '-');
    	array_splice($number2, 7, 0, '-');
    	$number3 = trim(implode("", $number2));
    	array_push($innercontacts, $number3);
    	array_push($contacts, $innercontacts);
    	
    }
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
