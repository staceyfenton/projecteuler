<?php

$sum = array_sum(range(1,100));
$totalSquared = pow($sum, 2);

$squaredValues = array();
for($i=1; $i<101; $i++) {
	$squaredValues[] = pow($i, 2);
}
$squaredTotal = array_sum($squaredValues);

print($totalSquared-$squaredTotal);