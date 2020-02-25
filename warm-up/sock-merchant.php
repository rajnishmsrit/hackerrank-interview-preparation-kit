<?php

// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {

	$sockCounter = [];
 	foreach ($ar as $item) {
		if(array_key_exists($item, $sockCounter)){
			$sockCounter[$item]++;
		}
		else{
			$sockCounter[$item] = 1;
		}
	}

	$pairs = 0;
	foreach ($sockCounter as $count) {
		$pairs += floor($count/2);
	}
	return $pairs;
}

$n = 4;
$ar = [1,2,2,3,4,5,5,5,5,5,5,5,3,1];
print_R(sockMerchant($n, $ar). PHP_EOL);