<?php
// $primefactors = [];
// $number = 600800000000;
$number = 1;
$max = $argv[1];

function findtheprime($max) {
	$primefactors = [];
	for($i = 2; $i = $max; $i++) {
		$p = 2;
		while (($p * $p) <= $max) {
			$j = ($p * $p);
			while($j <= $max) {
				$primefactors[$j] = 0;
				$j = $j + $p;
			}
			$p = $p + 1;
		}
	}
	var_dump($primefactors);
}
findtheprime($max);
// while($number <= $max) {
// 	if($max % $number == 0) {
// 		if($number != $max) {
// 			if(isPrime($number)) {
// 				array_push($primefactors, $number);
// 				echo("Pushing " . $number . " into the array" . PHP_EOL);
// 			}
// 		}
// 	}
// 	$number++;
// }
// $answer = $primefactors[count($primefactors)-1];
// echo "The largest prime factor of " . $max . " is " . $answer . PHP_EOL;
// function isPrime($num) {
//     if($num == 1)
//         return false;

//     //2 is prime (the only even number that is prime)
//     if($num == 2)
//         return true;

//     *
//      * if the number is divisible by two, then it's not prime and it's no longer
//      * needed to check other even numbers
     
//     if($num % 2 == 0) {
//         return false;
//     }

//     /**
//      * Checks the odd numbers. If any of them is a factor, then it returns false.
//      * The sqrt can be an aproximation, hence just for the sake of
//      * security, one rounds it to the next highest integer value.
//      */
//     for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
//         if($num % $i == 0)
//             return false;
//     }

//     return true;
// }
?>