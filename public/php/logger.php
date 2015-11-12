<?php

function logMessage($loglevel, $message)
{
	$date=date('Y-m-d');
    $handle = fopen("$date.log", 'a');
    $content = trim(fwrite($handle, date('Y-m-d h:i:s A') . "  " . $loglevel . "  " . $message . PHP_EOL));

    fclose($handle);
    return $content . PHP_EOL;
}

function loginfo() 
{
	logMessage("[INFO]", "Get up off'a dat thang!");
}

function logerror()
{
	logMessage("[ERROR]", "Err time gon' doit!");
}

if(1 == 2) {
	loginfo();
} else {
	logerror();
}
