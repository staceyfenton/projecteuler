<?php

$product = 0;
$palindromes = array();

for($x=1000; $x>=100; $x--) {
	for($y=1000; $y>=100; $y--) {
		$product = $x * $y;
		if(strval($product) == strrev($product)) {
			$palindromes[] = $product;
		}
	}
}

$largestPalindrome = max($palindromes);

print($largestPalindrome);