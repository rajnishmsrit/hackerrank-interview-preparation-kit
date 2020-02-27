<?php

// Complete the repeatedString function below.
function repeatedString($s, $n) {
    $base_count = 0;
    $a_count = 0;
    $string_array = str_split($s);
    foreach ($string_array as $key => $value) {
        if($value == "a"){
            $base_count++;
        } 
    }

    $a_count = $base_count*floor($n/count($string_array));
    $letters_left = $n % count($string_array);

    if($letters_left)
    {
        foreach ($string_array  as $key => $value) {
            if($value == "a"){
                $a_count++;
            }
            if ($key == $letters_left-1){
                return $a_count;            }
        }  
    }
    
    return $a_count;
}


$s = "aba";
$n =  10;

print_R(repeatedString($s, $n). PHP_EOL);