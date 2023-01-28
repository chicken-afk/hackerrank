<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    $output[0] = 0;
    $output[1] = 0;
    sort($arr);
    for($i = 0; $i<count($arr) ; $i++){
        if($i < (count($arr)-1)) {
            $output[0] += $arr[$i];
        }
        if($i != 0) {
            $output[1] += $arr[$i];
        }
    }
    echo $output[0]." ".$output[1];
    
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
