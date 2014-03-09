<?php

/*
	By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.

	What is the 10 001st prime number?
*/

$primes = array();
for ($x = 2; sizeof($primes) < 10001; $x++) {
    $xIsPrime = true;
    $sqrtX = sqrt($x);
    foreach ($primes as $prime) {
		if ($prime > $sqrtX || ((!($x % $prime)) && (!$xIsPrime = false))) { 
			break;
		}
	}
    if ($xIsPrime) {
		$primes[] = $x;
	}
}

print end($primes);