# Format date and time
($sec, $min, $hour, $mday, $mon, $year, $wday, $yday, $isdst) = localtime();

printf("Time Format - HH:MM:SS\n");
printf("%02d:%02d:%02d", $hour, $min, $sec);

