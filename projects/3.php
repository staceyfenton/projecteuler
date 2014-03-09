<?php
/*
$term = 1;
$primes = array(1);

while ($term < 600851475143) {

  $term++;
  
  echo "\033[5D";
  echo str_pad($term/600851475143, 3, ' ', STR_PAD_LEFT) . " %";
 
  if (600851475143%$term == 0) {
    array_push($primes, $term);
  }

}

$calculations = array();
$calculations['outcome'] = 1;

foreach ($primes as $prime) {
 if ($calculations['outcome'] >= end($primes)) 
   break;
 $calculations['numbers_multiplied'][] = $prime;
 $calculations['outcome'] *= $prime;
}

print_r($calculations);
*/
$offset = microtime(true);

$factorial = function ($n) {
  $x = 2;
  $factorials = array();

  while ($x * $x <= $n) {
    if (fmod($n, $x) ==  0) {
       $factorials[] = $x;
       $n = $n / $x;
    }
	  else {
		  $x++;
	  }
  }

  if ($n != 1) $factorials[] = $n;

  return $factorials;
};

$terms = 600851475143;
$factorials = $factorial($terms);

rsort ($factorials);
echo reset($factorials); 
//var_dump ($factorials);