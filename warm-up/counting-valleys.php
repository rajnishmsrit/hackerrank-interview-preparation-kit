<?php

// Complete the countingValleys function below.
function countingValleys($n, $s)
{

    // State can be u for uphill or V for downhill
    $state = "start";
    $height = 0;
    $noOfValleys = 0;

    $string = str_split($s);
    foreach ($string as $step) {
        if ($state == "start") {
            // Set initial state of first step
            $state = $step;
        }
        if ($step == "U") {
            $height++;
        }
        else{
            $height--;
        }
        
        // Find no of valleys
        if ($height == 0 && $state = "D" && $step == "U") {
            $noOfValleys++;
            $state = "start";
        }

        
    }
    return $noOfValleys;

}

$n = 8;
//$s = "UDDDUDUU";
$s = "UDDDUDUU";
print_R(countingValleys($n, $s). PHP_EOL);