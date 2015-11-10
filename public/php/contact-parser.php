<?php

function parseContacts($filename)
{
	$handle = fopen($filename, 'r');
	$content = trim(fread($handle, filesize($filename)));
    $contactarray = explode("\n", $content);
    $contacts = array();

    foreach ($contactarray as $contactinfo) {
        // Splits everything up
    	$innercontacts = explode("|", $contactinfo);

        // Dashes the phone numbers
        $number = array_pop($innercontacts);
    	$number1 = substr($number, 0, 3);
        $number2 = substr($number, 3, 3);
        $number3 = substr($number, 6, 4);
        $phonenumber = "$number1-$number2-$number3";

        // Puts the phone number back in
        array_push($innercontacts, $phonenumber);

        // Replaces the keys
        $name = $innercontacts[0];
        $phone = $innercontacts[1];
        $keys = [
            'Name' => $name, 
            'Number' => $phone
        ];
        $contactstuff[] = $keys;
    	
    }
    fclose($handle);
    return $contactstuff;
}

var_dump(parseContacts('contacts.txt'));
