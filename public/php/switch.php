<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
	case 1:
	    echo "Monday\n";
	    break;
	case 2:
	    echo "Tuesday\n";
	    break;
	case 3:
		echo "Wednesday\n";
		break;
	case 4:
		echo "Thursday\n";
		break;
	case 5:
		echo "Friday\n";
		break;
	case 6:
		echo "Saturday\n";
		break;
	case 7:
		echo "Sunday\n";
		break;
 }

 if ($dayOfWeek == 1) {
 	echo "Monday\n";
 } else if ($dayOfWeek == 2) {
 	echo "Tuesday\n";
 } else if ($dayOfWeek == 3) {
 	echo "Wednesday\n";
 } else if ($dayOfWeek == 4) {
 	echo "Thursday\n";
 } else if ($dayOfWeek == 5) {
 	echo "Friday\n";
 } else if ($dayOfWeek == 6) {
 	echo "Saturday\n";
 } else if ($dayOfWeek == 7) {
 	echo "Sunday\n";
 }
 ?>