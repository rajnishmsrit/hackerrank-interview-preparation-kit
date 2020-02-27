<?php

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c)
{

    $cloud_key_count = count($c);
    $jumps = 0;
    $consecutive_zero = 0;
    foreach ($c as $key => $value) {
        
        if ($value == 0) {
            $consecutive_zero++;
            if ($key == $cloud_key_count-1 ) {
                if ($consecutive_zero != 1) {
                    // Find last consecutive zeroes and provide least no of jumps
                    $jumps += floor($consecutive_zero/2);
                }
            }
        }
        else{
            if ($consecutive_zero == 1 && $key>2 && $c[$key-2]!=1) {
                $jumps += 1;
            }
            else{
                // Find last consecutive zeroes and provide least no of jumps
                $jumps += floor($consecutive_zero/2);
            }
            
            // We got a 1 so we need to jump
            $jumps++;
            // Reset
            $consecutive_zero = 0;
        }
    }
    return $jumps;
}

$n = 6;
//$s = [0, 0, 0, 0, 1, 0];
//$s = [0, 0, 0, 1, 0, 0];
//$s = [0, 0, 1, 0, 0, 1, 0];
$s = [0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0];
// 28
//$s = [0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0];
// 53

print_R(jumpingOnClouds($s). PHP_EOL);