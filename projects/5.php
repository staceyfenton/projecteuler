<?php

/*

	2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
	What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?
	
	Answer: 232792560
*/

for($n = 20; ; $n += 20) {
	for ($i = 1; $i < 20; $i++) {
		if ($n % $i != 0) {
			break;
		}
		if ($i == 19) {
			print $n;
			die();
		}
	}
}
